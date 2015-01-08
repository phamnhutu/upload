<?php
/**
 * Created by PhpStorm.
 * User: phamnhu
 * Date: 1/8/2015
 * Time: 3:33 PM
 */

    //add the job key to the list of job strings
    array_push($job_strings, 'custom_job');

    function custom_job()
    {
        //custom job code

        //return true for completed
        return true;
    }
