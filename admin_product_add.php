<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data1 = $_POST["data1"];
    $data2 = $_POST["data2"];
    $data3 = $_POST["data3"];
    $data4 = $_POST["data4"];
    $data5 = $_POST["data5"];
    $data6 = $_POST["data6"];

    // Проверка, что данные не пусты
    if (!empty($data1) && !empty($data2) && !empty($data3) && !empty($data4) && !empty($data5)&&!empty($data6)&&
        ($data1!=" ") && ($data2!=" ") && ($data3!=" ") && ($data4!=" ") && ($data5!=" ")&&$data6!=" ") {
        // Открываем или создаем текстовый файл для записи (например, data.txt)
        $file = fopen("product_add.txt", "a");

        // Записываем данные в файл, разделенные пробелами
        fwrite($file, $data1 . " " . $data2 . " " . $data3 . " " . $data4 . " " . $data5 . " " . $data6 . PHP_EOL);

        // Закрываем файл
        // Закрываем файл
        fclose($file);

        echo "Данные успешно записаны в файл!";
        echo "<script>alert('успех')</script>";
        $new_url = 'admin_product.html';
        header('Location: '.$new_url);
    } else {
        echo "<script>alert('провал')</script>";
        $new_url = 'admin_product.html';
        header('Location: '.$new_url);
    }
} else {
    // Обработка нажатия кнопки без отправки формы
    echo "Ошибка: Неверный метод запроса.";
}
?>