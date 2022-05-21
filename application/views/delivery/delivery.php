<div class="cont-menu">
    <ul class="menu-shop">
        <li>
            <a class="item-shop-active" href="./order">Замовлення</a>
        </li>
    </ul>
</div>
<div class="admin">
    <table class="goods">
        <thead>
        <tr>
            <th>Користувач</th>
            <th>Страви</th>
            <th>Кількість</th>
            <th>Ціна</th>
            <th>Статус</th>
            <th>Дата замовлення</th>
            <th>Тип оплати</th>
            <th>Місце доставки</th>
            <th>Телефон</th>
            <th></th>
        </tr>
        </thead>
        <?php foreach ($order as $order) : ?>
            <tr>
                <?php $id = $order->id ?>
                <td><?= $order->uname . ' ' . $order->usurname ?></td>
                <td><?= str_replace(',', '<br>', $order->gname) ?></td>
                <td><?= str_replace(',', '<br>', $order->quantity) ?></td>
                <td><?= $order->amount ?></td>
                <td><?= $order->status ?></td>
                <td><?= $order->date ?></td>
                <td><?= $order->payment ?></td>
                <td><?= $order->delivery ?></td>
                <td><?= $order->phone ?></td>
                <td></td>
                <td>
                    <form action="/delivery/order/update" method='post'>
                        <input type='hidden' name='edit' value='<?= $id ?>'/>
                        <input style="background: green; width: 150px" type="submit" class="btn-send" value="Змінити">
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</div>
<footer>
    <ul class="footer-menu">
        <li class="menu-item">© 2022. All you need. Food delivery</li>
    </ul>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
</body>

</html>