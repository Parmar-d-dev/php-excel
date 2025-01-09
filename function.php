<?php
// function arrayToCsvDownload($data, $filename)
// {
//     header('Content-Type: text/csv');
//     header('Content-Disposition: attachment; filename="' . $filename . '"');

//     // Open output stream
//     $output = fopen('php://output', 'w');

//     foreach ($data as $row) {
//         if (is_array($row)) {
//             fputcsv($output, $row);
//         } else {
//             fputcsv($output, [$row]);
//         }
//     }
//     // Close the output stream
//     fclose($output);
// }


function arrayToCsvDownload($headers, $data, $filename)
{
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '"');

    $output = fopen('php://output', 'w');

    if (!empty($headers)) {
        fputcsv($output, $headers);
    }

    foreach ($data as $row) {
        fputcsv($output, $row);
    }

    fclose($output);
}




// function downloadCSV($data, $columns, $filename)
// {

//     $file = fopen($filename, 'w');
//     fputcsv($file, $columns);
//     foreach ($data as $row) {
//         fputcsv($file, $row);
//     }
//     fclose($file);
//     header('Content-Type: application/csv');
//     header('Content-Disposition: attachment; filename="' . $filename . '"');
//     header('Content-Length: ' . filesize($filename));
//     readfile($filename);
//     // Delete the file
//     unlink($filename);

// }