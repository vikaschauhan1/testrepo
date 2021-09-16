<?php 
if (!function_exists('dataExporter'))
{
    /**
     * @param data 2D array first array is header and other is data 
     * ex - array(
     *          'header' => ['H1', 'H2'], 
     *          'data' => array(
     *                  ['val11', 'val12'],
     *                  ['val21', 'val22']
     *              )
     *      )
     * @param filename for exporting
     * @param extension type of file want to export
     * @return
     *
     */

    function dataExporter($data = array(), $fileName = 'recipient', $extension = 'csv')
    {        
        $fileName = $fileName.'.'.$extension;
        header("Content-Type: text/csv");
        header("Content-Disposition: attachment; filename=$fileName");
        # Disable caching - HTTP 1.1
        header("Cache-Control: no-cache, no-store, must-revalidate");
        # Disable caching - HTTP 1.0
        header("Pragma: no-cache");
        # Disable caching - Proxies
        header("Expires: 0");

        # Start the output

        $output = fopen("php://output", "w");
        fputcsv($output, $data['header']);
        foreach($data['data'] as $key => $dataRow) {
            fputcsv($output, $dataRow);
        }
        
        fclose($output);
        die;
    }

    
}



?>
