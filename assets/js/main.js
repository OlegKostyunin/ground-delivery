
let imgArr = ['assets/imgs/1.svg', 'assets/imgs/2.svg', 'assets/imgs/3.svg', 'assets/imgs/4.svg', 'assets/imgs/5.svg']

function slider() { //слайдер с 3 основными картинками
    document.querySelector('#img1 img').src = imgArr[0];
    document.querySelector('#img2 img').src = imgArr[1];
    document.querySelector('#img3 img').src = imgArr[2];
}

slider() //показываем слайдер на странице

document.getElementById('prev').addEventListener('click', () => { //кнопка назад
    imgArr.push(imgArr.shift()); //при нажатии на кнопку фото удаляется с первой позиции в массиве и переносится на последнюю и т.д.
    slider(); //показываем слайдер на странице
})

document.getElementById('next').addEventListener('click', () => { //кнопка вперед
    imgArr.push(imgArr.shift()); //при нажатии на кнопку фото удаляется с последней позиции в массиве и переносится на первую и т.д.
    slider(); //показываем слайдер на странице
})

//map

let nameMap = Array.from(document.querySelectorAll('.adrs')); // ссылка на класс с именем города (обернутая в массив)
let map = Array.from(document.querySelectorAll('.content_map')); // ссылка на класс с картой (обернутая в массив)

// 1. это стрелочная функция, которая находит элемент, где есть "is-active" и очищает его, когда мы нажимаем на другой город

const clearActiveClass = (elem, className = 'is-active') => {
    elem.find(item => item.classList.remove(`${className}`))
}

// 2. это стрелочная функция, которая находит элемент с классом "is-active" по индексу, и добавляет "is-active", когда мы нажимаем на город

const addActiveClass = (elem, index, className = 'is-active') => {
    elem[index].classList.add(`${className}`)
}

// 3. стрелочкая функция, которая передает в себе item - элемент и  index-индекс элемента, далее по нажатию на элемент (item)
// добавляется обработчик событий по клику и работают функции,которые написаны выше, т.е удаляет и добавляет класс 'is-active' у города и карты
// при нажатии

const checkCity = (item, index) => {
    item.addEventListener('click', () => {
        if (item.classList.contains('is-active')) return //чтобы не происходило миллион нажатий на город

        clearActiveClass(nameMap) //удаление класса is-active когда нажали на другой город
        clearActiveClass(map) //удаление класса is-active из карты когда нажали на другой город

        addActiveClass(nameMap, index) //добавление класса is-active когда нажали на этот город
        addActiveClass(map, index) //добавление класса is-active из карты когда нажали на этот город

        // console.log(item)

    })
}

nameMap.forEach(checkCity)

let movedRight = false;
let clickCounter = 0;

document.getElementById('moveButton').addEventListener('click', function() {
    const button = this;
    if (movedRight) {
        button.style.left = '0px'; 
    } else {
        button.style.left = '522px'; 
    }
    movedRight = !movedRight;

    // Увеличиваем счётчик кликов
    clickCounter++;

    // Проверяем, если счётчик нечётный
    if (clickCounter % 2 !== 0) {
        setTimeout(() => {
            modalWin.style.display = 'block'; // показать пользователю окно
            modalBackdrop.style.display = 'block'; // затемнить элементы сзади
        }, 1000); // задержка 1 секунда (1000 миллисекунд)
    }
});
function hideText() {
    var text = document.getElementById("text_bron");
    if (text.style.display === "none") {
        text.style.display = "block"; // Показываем элемент
    } else {
        setTimeout(() => {
            text.style.display = "none"; // Скрываем элемент с задержкой
        }, 400); // Задержка в 500 миллисекунд (0.5 секунды)
    }
}

// Модальное окно
const openModalBtn = document.getElementById('moveButton'); //ссылка на кнопку "рассчитать стоимость" для открытия мод. окна
const modalBackdrop = document.getElementById('modalBackdrop'); //ссылка на затемнение сзади окна
const modalWin = document.getElementById('modalWin'); //ссылка на само окно
const closeWin = document.querySelector('.closeWin'); //ссылка на крестик для закрытия окна

closeWin.addEventListener('click', () => { //закрытие окна при нажатии на крестик
    modalWin.style.display = 'none'; //закрыть окно пользователю
    modalBackdrop.style.display = 'none'; //убрать затемнение сзади
});

const sendApplication = document.getElementById('sendApplication'); //ссылка на кнопку "рассчитать стоимость"

sendApplication.addEventListener('click', () => { //добавляем слушатель события при клике на "рассчитать стоимость"
    let total = 0
    const valueService = document.getElementById('choose_service').value; //ссылка на материал и его значение
    const valueCity = document.getElementById('choose_city').value; //ссылка на город и его значение
    const ton = +document.getElementById('ton').value; //значение тонны

    switch (valueCity) {
        case 'nn':
            total += 1000
            break
        case 'dzer':
            total += 3000
            break
        case 'bogorodsk':
            total += 4000
            break
        case 'bor':
            total += 2000
            break
        case 'balahna':
            total += 2000
            break
        case 'kstovo':
            total += 5000
            break
    }

    switch (valueService) {
        case 'sand':
            total += 1300 * ton
            break
        case 'stone':
            total += 1500 * ton
            break
        case 'mixture':
            total += 900 * ton
            break
        case 'priming':
            total += 1700 * ton
            break
    }

    alert(`Итоговая стоимость: ${total} ₽`);

});



//селект
const selectElement = document.getElementById('tariff');

selectElement.addEventListener('change', (event) => {
    const selectedValue = event.target.value;
    const carts = document.querySelectorAll('.cart');

    if (selectedValue === 'all') {
        carts.forEach(cart => {
            cart.classList.add('active');
        });
    } else {
        carts.forEach(cart => {
            if (cart.dataset.service === selectedValue) {
                cart.classList.add('active');
            } else {
                cart.classList.remove('active');
            }
        });
    }
});

document.querySelectorAll('.cart').forEach(cart => cart.classList.add('active'));
//форма заявки
function openPopup() {
    document.getElementById("popup").style.display = "flex";
    document.body.style.overflow = "hidden"; // блокируем скролл фона
}
function closePopup() {
    document.getElementById("popup").style.display = "none";
    document.body.style.overflow = ""; // разблокируем скролл фона
}


//отзывы
document.addEventListener('DOMContentLoaded', function() {
    const addReviewForm = document.getElementById('add-review-form');
    const reviewsList = document.getElementById('reviews-list');

    addReviewForm.addEventListener('submit', function(event) {
        event.preventDefault(); // Предотвращение стандартной отправки формы

        // Создание объекта FormData для отправки данных формы
        const formData = new FormData(addReviewForm);

        // Отправка данных формы на сервер с помощью AJAX
        fetch('add-review.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(message => {
            alert(message); // Вывод сообщения о результате добавления отзыва
            fetchReviews(); // Обновление списка отзывов после успешного добавления
        })
        .catch(error => console.error('Ошибка при отправке отзыва:', error));
    });

    // Функция для загрузки и отображения отзывов
    function fetchReviews() {
        fetch('reviews.json') // Загрузка JSON файла с отзывами
            .then(response => response.json())
            .then(data => {
                reviewsList.innerHTML = ''; // Очистка текущего списка отзывов
                data.reviews.forEach(review => {
                    const reviewElement = document.createElement('div');
                    reviewElement.classList.add('review');
                    reviewElement.innerHTML = `
                        <h3>${review.name}</h3>
                        <p>${review.text}</p>
                    `;
                    reviewsList.appendChild(reviewElement);
                });
            })
            .catch(error => console.error('Ошибка загрузки отзывов:', error));
    }

    fetchReviews();
});

