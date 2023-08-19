document.getElementById("myForm").addEventListener("submit", function (event) {
  event.preventDefault();

  const name = document.getElementById("name").value;
  const phone = document.getElementById("phone").value;

  // Отправка данных на сервер через AJAX
  const xhr = new XMLHttpRequest();
  xhr.open("POST", "process_form.php", true);
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4 && xhr.status === 200) {
      document.getElementById("result").innerHTML = "Спасибо за отправку!";
    } else {
      document.getElementById("result").innerHTML =
        "Произошла ошибка при отправке.";
    }
  };
  xhr.send(
    "name=" + encodeURIComponent(name) + "&phone=" + encodeURIComponent(phone)
  );
});
