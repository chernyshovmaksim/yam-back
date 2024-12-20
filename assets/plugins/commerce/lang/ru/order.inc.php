<?php

setlocale(LC_ALL, 'ru_RU.UTF-8');

return [
    'order.name_field' => 'Имя',
    'order.email_field' => 'Email',
    'order.phone_field' => 'Телефон',
    'order.submit_btn' => 'Отправить заказ',
    'order.error.name_required' => 'Введите имя',
    'order.error.email_required' => 'Введите email',
    'order.error.email_incorrect' => 'Введите email правильно',
    'order.error.phone_required' => 'Введите телефон',
    'order.success' => '@CODE:<div class="text-center my-2 text-xs">Спасибо за ваш заказ</div>',
    'order.subject' => '@CODE:Новый заказ на сайте [(site_name)]',
    'order.subject_status_changed' => '@CODE:Статус заказа #[+order.id+] изменен',
    'order.order_paid' => '@CODE:Поступила оплата в размере [+amount+]',
    'order.order_full_paid' => '@CODE:Поступила оплата в размере [+amount+], заказ #[+order.id+] оплачен полностью',
    'order.subject_order_paid' => '@CODE:Заказ #[+order.id+] оплачен!',
    'order.status.new' => 'Новый',
    'order.status.processing' => 'В обработке',
    'order.status.paid' => 'Оплачен',
    'order.status.shipped' => 'Доставлен',
    'order.status.canceled' => 'Отменен',
    'order.status.complete' => 'Завершен',
    'order.status.pending' => 'Ожидание',
    'order.status_title' => 'Статус',
    'order.amount_title' => 'Сумма',
    'order.delivery_title' => 'Способ доставки',
    'order.payment_title' => 'Способ оплаты',
    'order.contact_group_title' => 'Данные покупателя',
    'order.payment_delivery_group_title' => 'Способ оплаты и доставки',
    'order.to_pay_title' => 'К оплате',
    'order.order_info' => 'Сведения о заказе',
    'order.order_id' => 'Номер заказа',
    'order.created_at' => 'Дата и время создания',
    'order.redirecting_to_payment' => 'Перенаправление на оплату...',
    'order.order_payment_link' => '@CODE:<p>Для оплаты заказа перейдите по ссылке <a href="[+link+]">[+link+]</a></p>',
    'order.order_data_changed' => '@CODE:Данные заказа #[+order.id+] изменены!',
    'order.order_cancelled' => 'Заказ отменен!',
];
