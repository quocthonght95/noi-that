<!DOCTYPE html>
<html>
<head>
    <title>Print order</title>
    <style type="text/css">
        table {
            width: 100%;
            margin: 0 auto;
            border: 1px solid;
            border-collapse: collapse;
            text-align: left;
        }

        tr th {
            background: #eeeeee;
            border: 1px solid;
        }

        tr td {
            border: 1px solid;
        }

        .row {
            width: 90%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="row">
        <div style=" width: 50%; float: left;">
        <h3>Thông tin khách hàng</h3>
        <p>Tên khách hàng: {{ $bill->Customer->name }}</p>
        <p>Email khách hàng: {{ $bill->Customer->email }}</p>
        <p>Địa chỉ giao sách: {{ $bill->Customer->address }}</p>
        <p>Số điện thoai: {{ $bill->Customer->phone }}</p>
        </div>
        <div style="width: 50%;float: right;">
        <h3>Đơn hàng</h3>
        <p>ID Đơn hàng: #DH{{ $bill->id }}</p>
        <p>Ngày đặt hàng: {{ $bill->date_order }}</p>
        <p>Total: {{ number_format($bill->total) }} VNĐ</p>
        <p>Phương thức thanh toán: {{ $bill->Payment->payment_name }}</p>
        </div>
    </div>

    <div style="clear:both;"><br/><br/></div>
    <table>
<!--        <thead> -->
<!--            <tr> -->
<!--                <th>ID</th> -->
<!--                <th>Date order</th> -->
<!--                <th>Payment Method</th> -->
<!--                <th>Status</th> -->
<!--                <th>Note</th> -->
<!--                <th>Customer</th> -->
<!--                <th>Total</th> -->
<!--            </tr> -->
<!--        </thead> -->
<!--        <tbody> -->
<!--            <tr> -->
<!--                <td>#HD{{ $bill->id }}</td> -->
<!--                <td>{{ $bill->date_order }}</td> -->
<!--                <td>{{ $bill->Payment->payment_name }}</td> -->
<!--                <td>{{ $bill->Status->status_name }}</td> -->
<!--                <td>{{ $bill->note }}</td> -->
<!--                <td>{{ $bill->Customer->name }}</td> -->
<!--                <td>{{ $bill->total }}</td> -->
<!--            </tr> -->
<!--        </tbody> -->
<!--    </table> -->

    <div>
        <h3>Những sách đã đặt</h3>
        <table style="clear: both;">
        <thead>
            <tr>
                <th>STT</th>
                <th>Quantity</th>
                <th>Product</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <?php $stt = 1; ?>
            @foreach($billDetails as $bill_dt)
                <tr>
                    <td>{{ $stt++ }}</td>
                    <td>{{ $bill_dt->quantity }}</td>
                    <td>{{ $bill_dt->Product->name }}</td>
                    <td>{{ number_format($bill_dt->unit_price) }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</body>
</html>
