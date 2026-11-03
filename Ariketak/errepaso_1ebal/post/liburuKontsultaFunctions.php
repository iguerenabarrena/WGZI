<?php
require_once(__DIR__ . "/../ddbb/connection.php");

function hartuLiburuak() {
    try {
        $pdo = connectDB();
        return $pdo->query("SELECT * FROM liburuak ORDER BY kodea")->fetchAll();
    } catch (PDOException $e) {
        die("Errorea datu-basearekin konektatzerakoan: " . $e->getMessage());
    }
}

function hartuLiburua($id) {
    try {
        $pdo = connectDB();
        $stmt = $pdo->prepare("SELECT * FROM liburuak WHERE kodea = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch();
    } catch (PDOException $e) {
        die("Errorea datu-basearekin konektatzerakoan: " . $e->getMessage());
    }
}

/** Bilaketa: izenburua/autorea zati bat (LIKE), eskuragarri ('' = edozein, '1', '0'). */
function bilatuLiburuak($titulua = '', $autorea = '', $eskuragarri = '') {
    try {
        $pdo = connectDB();

        // 1. Consulta base: título y autor contienen el texto buscado
        $sql = "SELECT * FROM liburuak
                WHERE titulua LIKE :titulua
                AND autorea LIKE :autorea";

        // 2. Valores que se pasan a la consulta
        $datuak = [
            'titulua' => '%' . $titulua . '%',
            'autorea' => '%' . $autorea . '%'
        ];

        // 3. Si eligió "Bai" (1) o "Ez" (0), añadimos ese filtro
        //“añade esto al final del texto que ya hay”
        if ($eskuragarri !== '') {
            $sql .= " AND eskuragarri = :eskuragarri";
            $datuak['eskuragarri'] = $eskuragarri;
        }

        // 4. Ejecutar y devolver los libros encontrados
        $stmt = $pdo->prepare($sql);
        $stmt->execute($datuak);
        return $stmt->fetchAll();

    } catch (PDOException $e) {
        die("Errorea bilaketan: " . $e->getMessage());
    }
}
