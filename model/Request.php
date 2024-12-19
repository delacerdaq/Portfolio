<?php
class RequestModel {

// Função para salvar os dados no banco de dados
public static function saveRequest($name, $phone, $email, $subject, $message) {
    try {
        // Obtém a conexão com o banco de dados
        $conn = Database::getConnection();

        // Prepara o comando SQL
        $sql = "INSERT INTO requests (user_name, phone, email, subj, msg) 
                VALUES (:name, :phone, :email, :subject, :message)";
        
        // Prepara a query
        $stmt = $conn->prepare($sql);

        // Liga os parâmetros aos valores
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':subject', $subject);
        $stmt->bindParam(':message', $message);

        // Executa a query
        if ($stmt->execute()) {
            return true; // Retorna true se a execução for bem-sucedida
        } else {
            return false; // Retorna false se a execução falhar
        }
    } catch (PDOException $e) {
        die("Erro ao salvar request: " . $e->getMessage());
    }
}
}
