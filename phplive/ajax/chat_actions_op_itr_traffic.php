<?php
	include_once( "../web/config.php" ) ;
	include_once( "$CONF[DOCUMENT_ROOT]/API/Util_Format.php" ) ;

	$opid = isset( $_COOKIE["cO"] ) ? Util_Format_Sanatize( $_COOKIE["cO"], "n" ) : "" ;
	$ses = isset( $_COOKIE["cS"] ) ? Util_Format_Sanatize( $_COOKIE["cS"], "ln" ) : "" ;
	$action = Util_Format_Sanatize( Util_Format_GetVar( "action" ), "ln" ) ;

	if ( !$opid || !is_file( "$CONF[TYPE_IO_DIR]/$opid"."_ses_{$ses}.ses" ) )
		$json_data = "json_data = { \"status\": -1 };" ;
	else if ( $action === "traffic" )
	{
		include_once( "$CONF[DOCUMENT_ROOT]/API/".Util_Format_Sanatize($CONF["SQLTYPE"], "ln") ) ;
		include_once( "$CONF[DOCUMENT_ROOT]/API/Ops/get.php" ) ;
		include_once( "$CONF[DOCUMENT_ROOT]/API/Footprints/get.php" ) ;
		$vis_tokens_array = Util_Format_Sanatize( Util_Format_GetVar( "vt" ), "a" ) ;

		$vis_tokens_hash = Array() ;
		for ( $c = 0; $c < count( $vis_tokens_array ); ++$c ) { $v = Util_Format_Sanatize( $vis_tokens_array[$c], "ln") ; $vis_tokens_hash[$v] = 1 ; }
		$dept_string = "" ;
		if ( 0 )
		{
			// feature in development significant updates in many areas needed
			$departments = Ops_get_OpDepts( $dbh, $_COOKIE["cO"] ) ;
			$dept_string_inner = "" ;
			for ( $c = 0; $c < count( $departments ); ++$c )
			{
				$department = $departments[$c] ;
				$dept_string_inner .= " deptID = $department[deptID] OR " ;
			}
			if ( $dept_string_inner )
			{
				$dept_string_inner = substr_replace( $dept_string_inner, "", -3 ) ;
				$dept_string = "WHERE $dept_string_inner" ;
			}
		}
		$traffics = Footprints_get_Footprints_U( $dbh, $dept_string ) ;
		$json_data = "json_data = { \"status\": 1, \"traffics\": [  " ;
		for ( $c = 0; $c < count( $traffics ); ++$c )
		{
			$traffic = $traffics[$c] ;
			$vis_token_bit = substr( $traffic["md5_vis"], 0, 7 ) ;
			$duration = $now - $traffic["created"] ;
			if ( $duration < 60 ) { $duration = 60 ; }
			$duration = Util_Format_Duration( $duration ) ;
			$os = $VARS_OS[$traffic["os"]] ;
			$browser = $VARS_BROWSER[$traffic["browser"]] ;

			$title = preg_replace( "/'/", "&lsquo;", preg_replace( "/(\")|(%22)/", "&quot;", $traffic["title"] ) ) ;
			$onpage = preg_replace( "/hphp/i", "http", preg_replace( "/(\")|(%22)/", "&quot;", $traffic["onpage"] ) ) ;
			$refer_raw = preg_replace( "/hphp/i", "http", preg_replace( "/(\")|(%22)/", "&quot;", $traffic["refer"] ) ) ;
			if ( !preg_match( "/^http/i", $refer_raw ) ) { $refer_raw = "" ; }
			$refer_snap = ( strlen( $refer_raw ) > 30 ) ? substr( $refer_raw, 0, 30 ) . "..." : $refer_raw ;
			$refer_snap = preg_replace( "/^((http)|(https)):\/\/(www.)/", "", $refer_snap ) ;

			$t_footprints = $traffic["footprints"] ; $t_requests = $traffic["requests"] ; $t_initiates = $traffic["initiates"] ;

			$ip = $traffic["ip"] ;

			$geo_country = ( $traffic["country"] ) ? $traffic["country"] : "unknown" ;
			$geo_region = ( $traffic["region"] ) ? $traffic["region"] : "-" ;
			$geo_city = ( $traffic["city"] ) ? $traffic["city"] : "-" ;
			$geo_latitude = ( $traffic["latitude"] ) ? $traffic["latitude"] : 28.613459424004414 ;
			$geo_longitude = ( $traffic["longitude"] ) ? $traffic["longitude"] : -40.4296875 ;

			if ( isset( $vis_tokens_hash[$vis_token_bit] ) ) 
				$json_data .= "{ \"vis_token\": \"$traffic[md5_vis]\", \"chatting\": \"$traffic[chatting]\", \"onpage\": \"$onpage\", \"title\": \"$title\", \"duration\": \"$duration\", \"t_footprints\": $t_footprints, \"t_requests\": $t_requests, \"t_initiates\": $t_initiates }," ;
			else
				$json_data .= "{ \"vis_token\": \"$traffic[md5_vis]\", \"chatting\": \"$traffic[chatting]\", \"ip\": \"$ip\", \"onpage\": \"$onpage\", \"title\": \"$title\", \"duration\": \"$duration\", \"os\": \"$os\", \"browser\": \"$browser\", \"resolution\": \"$traffic[resolution]\", \"marketid\": \"$traffic[marketID]\", \"refer_snap\": \"$refer_snap\", \"refer_raw\": \"$refer_raw\", \"t_footprints\": $t_footprints, \"t_requests\": $t_requests, \"t_initiates\": $t_initiates, \"country\": \"$geo_country\", \"region\": \"$geo_region\", \"city\": \"$geo_city\" }," ;
		}
		$json_data = substr_replace( $json_data, "", -1 ) ;
		$json_data .= "	] };" ;
	}
	else
		$json_data = "json_data = { \"status\": 0 };" ;

	if ( isset( $dbh ) && isset( $dbh['con'] ) ) { database_mysql_close( $dbh ) ; }
	$json_data = Util_Format_Trim( $json_data ) ;
	$json_data = preg_replace( "/\t/", "", $json_data ) ;
	HEADER('Content-Type: text/plain; charset=utf-8') ;
	print $json_data ; exit ;
?>
