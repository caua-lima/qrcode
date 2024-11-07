<?php
// Inclui a biblioteca phpqrcode
include 'phpqrcode/src/QRCode.php';

// Verifica se o formulário foi enviado e se o campo de link está preenchido
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST['link'])) {
    // Obtém o link enviado pelo usuário
    $link = $_POST['link'];

    // Define o caminho do arquivo temporário para o QR Code
    $tempDir = "qrcodes/";
    if (!file_exists($tempDir)) {
        mkdir($tempDir); // Cria o diretório se não existir
    }
    $fileName = $tempDir . 'qrcode.png';

    // Gera o QR Code
    QRcode::png($link, $fileName, QR_ECLEVEL_L, 10);

    echo "<h2>QR Code Gerado:</h2>";
    echo "<img src='" . $fileName . "' alt='QR Code'>";
    echo "<p><a href='$fileName' download='qrcode.png'>Baixar QR Code</a></p>";
} else {
    echo "Erro: Link não fornecido!";
}
?>
