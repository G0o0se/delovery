<div class="cont-menu">
    <ul class="menu-shop">
        <li>
            <a class="item-shop-active" href="/delivery/order">Замовлення</a>
        </li>
    </ul>
</div>
<div class="update">
        <table style="margin: 30px" class="goods">
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
            </tr>
            </thead>
            <form method='post'>
            <?php foreach ($order as $order) : ?>
                <tr>
                    <td><?= $order->uname . ' ' . $order->usurname ?></td>
                    <td><?= str_replace(',', '<br>', $order->gname) ?></td>
                    <td><?= str_replace(',', '<br>', $order->quantity) ?></td>
                    <td><?= $order->amount ?></td>
                    <td>
                        <select name="status" class="input-form" style="height: 29px;color: grey;font-size: 13px">
                            <option value="<?= $order->status ?>" selected>Aкт. статус: <?= $order->status ?></option>
                            <option value="Доставляється">Доставляється</option>
                            <option value="Виконано">Виконано</option>
                        </select>
                    </td>
                    <td><?= $order->date ?></td>
                    <td><?= $order->payment ?></td>
                    <td><?= $order->delivery ?></td>
                    <td>
                            <input type='hidden' name='editing' value='<?= $order->id ?>'/>
                            <input style="background: green; width: 150px" type="submit" class="btn-send" value="Змінити">
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<footer>
    <ul class="footer-menu">
        <li class="menu-item">© 2022. All you need. Food delivery</li>
    </ul>
</footer>

</body>

</html>