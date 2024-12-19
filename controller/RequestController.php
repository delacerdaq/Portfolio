<?php
class RequestController {

// Função para processar o request
public function saveRequest() {
    // Variáveis para armazenar as mensagens de status
    $successMessage = '';
    $errorMessage = '';

    // Verifica se o formulário foi submetido
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Recebe os dados do formulário
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        // Chama o modelo para salvar os dados no banco
        $isSaved = RequestModel::saveRequest($name, $phone, $email, $subject, $message);

        // Verifica se os dados foram salvos com sucesso
        if ($isSaved) {
            $successMessage = '<p style="color: green; text-align: center; margin-top: 15px;">Request enviado com sucesso!</p>';
        } else {
            $errorMessage = '<p style="color: red; text-align: center; margin-top: 15px;">Erro ao enviar o request. Tente novamente!</p>';
        }
    }

    // Retorna as mensagens de status
    return ['success' => $successMessage, 'error' => $errorMessage];
}

}
