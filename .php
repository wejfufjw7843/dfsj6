<?php
// Создание ассоциативного массива с информацией о товарах и их количестве на складе
let products = {
    "Шоколад": 15,
  "Кофе": 5,
  "Чай": 20,
  "Печенье": 8,
  "Сок": 12
};

// Нахождение товаров, количество которых меньше 10 штук
let lowStockProducts = [];
for (let product in products) {
    if (products[product] < 10) {
        lowStockProducts.push(product);
    }
}

// Вывод товаров с количеством меньше 10 штук
console.log("Товары с количеством менее 10 штук: " + lowStockProducts.join(", "));
?>