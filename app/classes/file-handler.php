<?php

trait FileHandler
{
    private $FILE_PATH = __DIR__ . "/../../data/vehicles.json";

    public function readJsonFile(): array
    {
        try {

            if (file_exists($this->FILE_PATH)) {
                $jsonContent = json_decode(file_get_contents($this->FILE_PATH), true);
                if (json_last_error() === JSON_ERROR_NONE) {
                    return $jsonContent;
                } else {
                    throw new Exception("Error decoding JSON: " . json_last_error_msg());
                }
            } else {
                echo "<br>File not found: </br>";
                return [];
            }
        } catch (Exception $error) {
            echo  "Error: " . $error->getMessage();
            return [
                "error" => "Failed to read the JSON file.",
                "message" => $error->getMessage()
            ];
        }
    }

    public function writeJsonFile(array $data): bool
    {
        try {
            if (file_exists($this->FILE_PATH)) {
                $jsonContent = json_encode($data, JSON_PRETTY_PRINT);
                if (json_last_error() === JSON_ERROR_NONE) {
                    file_put_contents($this->FILE_PATH, $jsonContent);
                    return true;
                } else {
                    throw new Exception("Error encoding JSON: " . json_last_error_msg());
                }
            } else {
                return false;
            }
        } catch (Exception $error) {
            echo  "Error: " . $error->getMessage();
            return false;
        }
    }
};
