<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------------
| Profiler Sections
| -------------------------------------------------------------------------
| This file lets you determine whether or not various sections of Profiler
| data are displayed when the Profiler is enabled.
| Please see the user guide for info:
|
|	http://codeigniter.com/user_guide/general/profiling.html
|
*/
$config['memory_usage']    = TRUE;
$config['controller_info'] = TRUE;
$config['config']          = FALSE;
$config['queries']         = TRUE;
$config['get']             = TRUE;
$config['post']            = TRUE;
$config['query_toggle_count'] = 25;


/* End of file profiler.php */
/* Location: ./application/config/profiler.php */