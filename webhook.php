<?php
// Ścieżka do folderu jsons
$json_folder = 'jsons/';

// Sprawdź, czy folder istnieje, jeśli nie, utwórz go
if (!file_exists($json_folder)) {
    mkdir($json_folder, 0777, true);
}

// Odczytaj dane z POST requestu
$json_data = file_get_contents('php://input');

// Pobierz liczbę istniejących plików, aby nadać kolejne ID
$files = array_diff(scandir($json_folder), array('.', '..'));
$next_id = count($files) + 1;

// Ścieżka zapisu pliku
$file_path = $json_folder . $next_id . '.json';

// Zapisz dane do pliku
file_put_contents($file_path, $json_data);

// Zwróć odpowiedź
echo json_encode([
    "message" => "JSON saved",
    "id" => $next_id
]);
?>
