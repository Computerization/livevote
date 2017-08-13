@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-12 col-xs-12 col-sm-12">
        <h4>Select Your Classroom</h4>
        <p>
          Instructions:<br>
          All classrooms and Times are shown in table.<br>
          A box with group name indicates that the specific room and time have been ocupied.<br>
          Click on boxs with <a><b>Available</b></a> to reserve that room in certain time.<br>
          To cancel reservation, click on the box you have reserved before. (You can only cancel your own reservations.)
        </p>

        <div class="panel" @if(config('samcloud.room_order_available')) style="display:none;" @endif>
          <div class="panel-heading">
              Sorry, Reservation is temporarily not available.
          </div>
          <div class="panel-body">
             Please read the operation instruction above. And here are all room choice.<br>
            C101 C102 C103 C201 C202
            C203
            C204
            C205
            C206
            C207
            C208
            操场（篮球场）
            操场（雨棚）
            美术室
            音乐室
            形体房
            化学实验室
            生物实验室
            物理实验室
            录音室
            A110
            A206
            外校1
            外校2
            外校3
            其他1
            其他2
            其他3</div>
        </div>

        <div class="panel" @if(!config('samcloud.room_order_available')) style="display:none;" @endif>
          <div class="panel-body">
            <table class="table">
              <thead>
                <tr>
                  <th>Room</th>
                  <th>Mon</th>
                  <th>Tue</th>
                  <th>Wed</th>
                  <th>Thur</th>
                  <th>Fri</th>
                </tr>
              </thead>
              <tbody>
                <!-- C101 -->
                <tr>
                  <th scope="row">C101</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'rm101']) }}">
                    @if(isset($order['mon']['rm101']['uid']))
                      {{ $order['mon']['rm101']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'rm101']) }}">
                    @if(isset($order['tue']['rm101']['uid']))
                      {{ $order['tue']['rm101']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'rm101']) }}">
                    @if(isset($order['wed']['rm101']['uid']))
                      {{ $order['wed']['rm101']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'rm101']) }}">
                    @if(isset($order['thur']['rm101']['uid']))
                      {{ $order['thur']['rm101']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'rm101']) }}">
                    @if(isset($order['fri']['rm101']['uid']))
                      {{ $order['fri']['rm101']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- C102 -->
                <tr>
                  <th scope="row">C102</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'rm102']) }}">
                    @if(isset($order['mon']['rm102']['uid']))
                      {{ $order['mon']['rm102']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'rm102']) }}">
                    @if(isset($order['tue']['rm102']['uid']))
                      {{ $order['tue']['rm102']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'rm102']) }}">
                    @if(isset($order['wed']['rm102']['uid']))
                      {{ $order['wed']['rm102']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'rm102']) }}">
                    @if(isset($order['thur']['rm102']['uid']))
                      {{ $order['thur']['rm102']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'rm102']) }}">
                    @if(isset($order['fri']['rm102']['uid']))
                      {{ $order['fri']['rm102']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- C103 -->
                <tr>
                  <th scope="row">C103</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'rm103']) }}">
                    @if(isset($order['mon']['rm103']['uid']))
                      {{ $order['mon']['rm103']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'rm103']) }}">
                    @if(isset($order['tue']['rm103']['uid']))
                      {{ $order['tue']['rm103']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'rm103']) }}">
                    @if(isset($order['wed']['rm103']['uid']))
                      {{ $order['wed']['rm103']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'rm103']) }}">
                    @if(isset($order['thur']['rm103']['uid']))
                      {{ $order['thur']['rm103']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'rm103']) }}">
                    @if(isset($order['fri']['rm103']['uid']))
                      {{ $order['fri']['rm103']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- C201 -->
                <tr>
                  <th scope="row">C201</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'rm201']) }}">
                    @if(isset($order['mon']['rm201']['uid']))
                      {{ $order['mon']['rm201']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'rm201']) }}">
                    @if(isset($order['tue']['rm201']['uid']))
                      {{ $order['tue']['rm201']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'rm201']) }}">
                    @if(isset($order['wed']['rm201']['uid']))
                      {{ $order['wed']['rm201']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'rm201']) }}">
                    @if(isset($order['thur']['rm201']['uid']))
                      {{ $order['thur']['rm201']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'rm201']) }}">
                    @if(isset($order['fri']['rm201']['uid']))
                      {{ $order['fri']['rm201']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- C202 -->
                <tr>
                  <th scope="row">C202</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'rm202']) }}">
                    @if(isset($order['mon']['rm202']['uid']))
                      {{ $order['mon']['rm202']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'rm202']) }}">
                    @if(isset($order['tue']['rm202']['uid']))
                      {{ $order['tue']['rm202']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'rm202']) }}">
                    @if(isset($order['wed']['rm202']['uid']))
                      {{ $order['wed']['rm202']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'rm202']) }}">
                    @if(isset($order['thur']['rm202']['uid']))
                      {{ $order['thur']['rm202']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'rm202']) }}">
                    @if(isset($order['fri']['rm202']['uid']))
                      {{ $order['fri']['rm202']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- C203 -->
                <tr>
                  <th scope="row">C203</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'rm203']) }}">
                    @if(isset($order['mon']['rm203']['uid']))
                      {{ $order['mon']['rm203']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'rm203']) }}">
                    @if(isset($order['tue']['rm203']['uid']))
                      {{ $order['tue']['rm203']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'rm203']) }}">
                    @if(isset($order['wed']['rm203']['uid']))
                      {{ $order['wed']['rm203']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'rm203']) }}">
                    @if(isset($order['thur']['rm203']['uid']))
                      {{ $order['thur']['rm203']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'rm203']) }}">
                    @if(isset($order['fri']['rm203']['uid']))
                      {{ $order['fri']['rm203']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- C204 -->
                <tr>
                  <th scope="row">C204</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'rm204']) }}">
                    @if(isset($order['mon']['rm204']['uid']))
                      {{ $order['mon']['rm204']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'rm204']) }}">
                    @if(isset($order['tue']['rm204']['uid']))
                      {{ $order['tue']['rm204']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'rm204']) }}">
                    @if(isset($order['wed']['rm204']['uid']))
                      {{ $order['wed']['rm204']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'rm204']) }}">
                    @if(isset($order['thur']['rm204']['uid']))
                      {{ $order['thur']['rm204']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'rm204']) }}">
                    @if(isset($order['fri']['rm204']['uid']))
                      {{ $order['fri']['rm204']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- C205 -->
                <tr>
                  <th scope="row">C205</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'rm205']) }}">
                    @if(isset($order['mon']['rm205']['uid']))
                      {{ $order['mon']['rm205']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'rm205']) }}">
                    @if(isset($order['tue']['rm205']['uid']))
                      {{ $order['tue']['rm205']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'rm205']) }}">
                    @if(isset($order['wed']['rm205']['uid']))
                      {{ $order['wed']['rm205']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'rm205']) }}">
                    @if(isset($order['thur']['rm205']['uid']))
                      {{ $order['thur']['rm205']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'rm205']) }}">
                    @if(isset($order['fri']['rm205']['uid']))
                      {{ $order['fri']['rm205']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- C206 -->
                <tr>
                  <th scope="row">C206</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'rm206']) }}">
                    @if(isset($order['mon']['rm206']['uid']))
                      {{ $order['mon']['rm206']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'rm206']) }}">
                    @if(isset($order['tue']['rm206']['uid']))
                      {{ $order['tue']['rm206']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'rm206']) }}">
                    @if(isset($order['wed']['rm206']['uid']))
                      {{ $order['wed']['rm206']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'rm206']) }}">
                    @if(isset($order['thur']['rm206']['uid']))
                      {{ $order['thur']['rm206']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'rm206']) }}">
                    @if(isset($order['fri']['rm206']['uid']))
                      {{ $order['fri']['rm206']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- C207 -->
                <tr>
                  <th scope="row">C207</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'rm207']) }}">
                    @if(isset($order['mon']['rm207']['uid']))
                      {{ $order['mon']['rm207']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'rm207']) }}">
                    @if(isset($order['tue']['rm207']['uid']))
                      {{ $order['tue']['rm207']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'rm207']) }}">
                    @if(isset($order['wed']['rm207']['uid']))
                      {{ $order['wed']['rm207']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'rm207']) }}">
                    @if(isset($order['thur']['rm207']['uid']))
                      {{ $order['thur']['rm207']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'rm207']) }}">
                    @if(isset($order['fri']['rm207']['uid']))
                      {{ $order['fri']['rm207']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- C208 -->
                <tr>
                  <th scope="row">C208</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'rm208']) }}">
                    @if(isset($order['mon']['rm208']['uid']))
                      {{ $order['mon']['rm208']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'rm208']) }}">
                    @if(isset($order['tue']['rm208']['uid']))
                      {{ $order['tue']['rm208']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'rm208']) }}">
                    @if(isset($order['wed']['rm208']['uid']))
                      {{ $order['wed']['rm208']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'rm208']) }}">
                    @if(isset($order['thur']['rm208']['uid']))
                      {{ $order['thur']['rm208']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'rm208']) }}">
                    @if(isset($order['fri']['rm208']['uid']))
                      {{ $order['fri']['rm208']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- Basketball Field -->
                <tr>
                  <th scope="row">操场（篮球场）</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'basketballfield']) }}">
                    @if(isset($order['mon']['basketballfield']['uid']))
                      {{ $order['mon']['basketballfield']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'basketballfield']) }}">
                    @if(isset($order['tue']['basketballfield']['uid']))
                      {{ $order['tue']['basketballfield']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'basketballfield']) }}">
                    @if(isset($order['wed']['basketballfield']['uid']))
                      {{ $order['wed']['basketballfield']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'basketballfield']) }}">
                    @if(isset($order['thur']['basketballfield']['uid']))
                      {{ $order['thur']['basketballfield']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'basketballfield']) }}">
                    @if(isset($order['fri']['basketballfield']['uid']))
                      {{ $order['fri']['basketballfield']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- Indoor Playground -->
                <tr>
                  <th scope="row">操场（雨棚）</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'indoorplayground']) }}">
                    @if(isset($order['mon']['indoorplayground']['uid']))
                      {{ $order['mon']['indoorplayground']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'indoorplayground']) }}">
                    @if(isset($order['tue']['indoorplayground']['uid']))
                      {{ $order['tue']['indoorplayground']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'indoorplayground']) }}">
                    @if(isset($order['wed']['indoorplayground']['uid']))
                      {{ $order['wed']['indoorplayground']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'indoorplayground']) }}">
                    @if(isset($order['thur']['indoorplayground']['uid']))
                      {{ $order['thur']['indoorplayground']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'indoorplayground']) }}">
                    @if(isset($order['fri']['indoorplayground']['uid']))
                      {{ $order['fri']['indoorplayground']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- Art Room -->
                <tr>
                  <th scope="row">美术室</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'artroom']) }}">
                    @if(isset($order['mon']['artroom']['uid']))
                      {{ $order['mon']['artroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'artroom']) }}">
                    @if(isset($order['tue']['artroom']['uid']))
                      {{ $order['tue']['artroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'artroom']) }}">
                    @if(isset($order['wed']['artroom']['uid']))
                      {{ $order['wed']['artroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'artroom']) }}">
                    @if(isset($order['thur']['artroom']['uid']))
                      {{ $order['thur']['artroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'artroom']) }}">
                    @if(isset($order['fri']['artroom']['uid']))
                      {{ $order['fri']['artroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- Music Room -->
                <tr>
                  <th scope="row">音乐室</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'musicroom']) }}">
                    @if(isset($order['mon']['musicroom']['uid']))
                      {{ $order['mon']['musicroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'musicroom']) }}">
                    @if(isset($order['tue']['musicroom']['uid']))
                      {{ $order['tue']['musicroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'musicroom']) }}">
                    @if(isset($order['wed']['musicroom']['uid']))
                      {{ $order['wed']['musicroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'musicroom']) }}">
                    @if(isset($order['thur']['musicroom']['uid']))
                      {{ $order['thur']['musicroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'musicroom']) }}">
                    @if(isset($order['fri']['musicroom']['uid']))
                      {{ $order['fri']['musicroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- Dance Room -->
                <tr>
                  <th scope="row">形体房</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'danceroom']) }}">
                    @if(isset($order['mon']['danceroom']['uid']))
                      {{ $order['mon']['danceroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'danceroom']) }}">
                    @if(isset($order['tue']['danceroom']['uid']))
                      {{ $order['tue']['danceroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'danceroom']) }}">
                    @if(isset($order['wed']['danceroom']['uid']))
                      {{ $order['wed']['danceroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'danceroom']) }}">
                    @if(isset($order['thur']['danceroom']['uid']))
                      {{ $order['thur']['danceroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'danceroom']) }}">
                    @if(isset($order['fri']['danceroom']['uid']))
                      {{ $order['fri']['danceroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- Chem Lab -->
                <tr>
                  <th scope="row">化学实验室</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'chemlab']) }}">
                    @if(isset($order['mon']['chemlab']['uid']))
                      {{ $order['mon']['chemlab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'chemlab']) }}">
                    @if(isset($order['tue']['chemlab']['uid']))
                      {{ $order['tue']['chemlab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'chemlab']) }}">
                    @if(isset($order['wed']['chemlab']['uid']))
                      {{ $order['wed']['chemlab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'chemlab']) }}">
                    @if(isset($order['thur']['chemlab']['uid']))
                      {{ $order['thur']['chemlab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'chemlab']) }}">
                    @if(isset($order['fri']['chemlab']['uid']))
                      {{ $order['fri']['chemlab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- Bio Lab -->
                <tr>
                  <th scope="row">生物实验室</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'biolab']) }}">
                    @if(isset($order['mon']['biolab']['uid']))
                      {{ $order['mon']['biolab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'biolab']) }}">
                    @if(isset($order['tue']['biolab']['uid']))
                      {{ $order['tue']['biolab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'biolab']) }}">
                    @if(isset($order['wed']['biolab']['uid']))
                      {{ $order['wed']['biolab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'biolab']) }}">
                    @if(isset($order['thur']['biolab']['uid']))
                      {{ $order['thur']['biolab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'biolab']) }}">
                    @if(isset($order['fri']['biolab']['uid']))
                      {{ $order['fri']['biolab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- Phys Lab -->
                <tr>
                  <th scope="row">物理实验室</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'physlab']) }}">
                    @if(isset($order['mon']['physlab']['uid']))
                      {{ $order['mon']['physlab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'physlab']) }}">
                    @if(isset($order['tue']['physlab']['uid']))
                      {{ $order['tue']['physlab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'physlab']) }}">
                    @if(isset($order['wed']['physlab']['uid']))
                      {{ $order['wed']['physlab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'physlab']) }}">
                    @if(isset($order['thur']['physlab']['uid']))
                      {{ $order['thur']['physlab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'physlab']) }}">
                    @if(isset($order['fri']['physlab']['uid']))
                      {{ $order['fri']['physlab']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- Recording Room -->
                <tr>
                  <th scope="row">录音室</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'recordroom']) }}">
                    @if(isset($order['mon']['recordroom']['uid']))
                      {{ $order['mon']['recordroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'recordroom']) }}">
                    @if(isset($order['tue']['recordroom']['uid']))
                      {{ $order['tue']['recordroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'recordroom']) }}">
                    @if(isset($order['wed']['recordroom']['uid']))
                      {{ $order['wed']['recordroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'recordroom']) }}">
                    @if(isset($order['thur']['recordroom']['uid']))
                      {{ $order['thur']['recordroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'recordroom']) }}">
                    @if(isset($order['fri']['recordroom']['uid']))
                      {{ $order['fri']['recordroom']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- A110 -->
                <tr>
                  <th scope="row">A110</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'a110']) }}">
                    @if(isset($order['mon']['a110']['uid']))
                      {{ $order['mon']['a110']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'a110']) }}">
                    @if(isset($order['tue']['a110']['uid']))
                      {{ $order['tue']['a110']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'a110']) }}">
                    @if(isset($order['wed']['a110']['uid']))
                      {{ $order['wed']['a110']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'a110']) }}">
                    @if(isset($order['thur']['a110']['uid']))
                      {{ $order['thur']['a110']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'a110']) }}">
                    @if(isset($order['fri']['a110']['uid']))
                      {{ $order['fri']['a110']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- A206 -->
                <tr>
                  <th scope="row">A206</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'a206']) }}">
                    @if(isset($order['mon']['a206']['uid']))
                      {{ $order['mon']['a206']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'a206']) }}">
                    @if(isset($order['tue']['a206']['uid']))
                      {{ $order['tue']['a206']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'a206']) }}">
                    @if(isset($order['wed']['a206']['uid']))
                      {{ $order['wed']['a206']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'a206']) }}">
                    @if(isset($order['thur']['a206']['uid']))
                      {{ $order['thur']['a206']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'a206']) }}">
                    @if(isset($order['fri']['a206']['uid']))
                      {{ $order['fri']['a206']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- 外校1 -->
                <tr>
                  <th scope="row">外校1</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'outsideschool1']) }}">
                    @if(isset($order['mon']['outsideschool1']['uid']))
                      {{ $order['mon']['outsideschool1']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'outsideschool1']) }}">
                    @if(isset($order['tue']['outsideschool1']['uid']))
                      {{ $order['tue']['outsideschool1']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'outsideschool1']) }}">
                    @if(isset($order['wed']['outsideschool1']['uid']))
                      {{ $order['wed']['outsideschool1']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'outsideschool1']) }}">
                    @if(isset($order['thur']['outsideschool1']['uid']))
                      {{ $order['thur']['outsideschool1']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'outsideschool1']) }}">
                    @if(isset($order['fri']['outsideschool1']['uid']))
                      {{ $order['fri']['outsideschool1']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- 外校2 -->
                <tr>
                  <th scope="row">外校2</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'outsideschool2']) }}">
                    @if(isset($order['mon']['outsideschool2']['uid']))
                      {{ $order['mon']['outsideschool2']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'outsideschool2']) }}">
                    @if(isset($order['tue']['outsideschool2']['uid']))
                      {{ $order['tue']['outsideschool2']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'outsideschool2']) }}">
                    @if(isset($order['wed']['outsideschool2']['uid']))
                      {{ $order['wed']['outsideschool2']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'outsideschool2']) }}">
                    @if(isset($order['thur']['outsideschool2']['uid']))
                      {{ $order['thur']['outsideschool2']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'outsideschool2']) }}">
                    @if(isset($order['fri']['outsideschool2']['uid']))
                      {{ $order['fri']['outsideschool2']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- 外校3 -->
                <tr>
                  <th scope="row">外校3</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'outsideschool3']) }}">
                    @if(isset($order['mon']['outsideschool3']['uid']))
                      {{ $order['mon']['outsideschool3']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'outsideschool3']) }}">
                    @if(isset($order['tue']['outsideschool3']['uid']))
                      {{ $order['tue']['outsideschool3']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'outsideschool3']) }}">
                    @if(isset($order['wed']['outsideschool3']['uid']))
                      {{ $order['wed']['outsideschool3']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'outsideschool3']) }}">
                    @if(isset($order['thur']['outsideschool3']['uid']))
                      {{ $order['thur']['outsideschool3']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'outsideschool3']) }}">
                    @if(isset($order['fri']['outsideschool3']['uid']))
                      {{ $order['fri']['outsideschool3']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- 其他1 -->
                <tr>
                  <th scope="row">其他1</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'other1']) }}">
                    @if(isset($order['mon']['other1']['uid']))
                      {{ $order['mon']['other1']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'other1']) }}">
                    @if(isset($order['tue']['other1']['uid']))
                      {{ $order['tue']['other1']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'other1']) }}">
                    @if(isset($order['wed']['other1']['uid']))
                      {{ $order['wed']['other1']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'other1']) }}">
                    @if(isset($order['thur']['other1']['uid']))
                      {{ $order['thur']['other1']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'other1']) }}">
                    @if(isset($order['fri']['other1']['uid']))
                      {{ $order['fri']['other1']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- 其他2 -->
                <tr>
                  <th scope="row">其他2</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'other2']) }}">
                    @if(isset($order['mon']['other2']['uid']))
                      {{ $order['mon']['other2']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'other2']) }}">
                    @if(isset($order['tue']['other2']['uid']))
                      {{ $order['tue']['other2']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'other2']) }}">
                    @if(isset($order['wed']['other2']['uid']))
                      {{ $order['wed']['other2']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'other2']) }}">
                    @if(isset($order['thur']['other2']['uid']))
                      {{ $order['thur']['other2']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'other2']) }}">
                    @if(isset($order['fri']['other2']['uid']))
                      {{ $order['fri']['other2']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>
                <!-- 其他3 -->
                <tr>
                  <th scope="row">其他3</th>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['mon', 'other3']) }}">
                    @if(isset($order['mon']['other3']['uid']))
                      {{ $order['mon']['other3']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['tue', 'other3']) }}">
                    @if(isset($order['tue']['other3']['uid']))
                      {{ $order['tue']['other3']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['wed', 'other3']) }}">
                    @if(isset($order['wed']['other3']['uid']))
                      {{ $order['wed']['other3']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['thur', 'other3']) }}">
                    @if(isset($order['thur']['other3']['uid']))
                      {{ $order['thur']['other3']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                  <td>
                    <a href="{{ URL::action('RoomOrderController@process',['fri', 'other3']) }}">
                    @if(isset($order['fri']['other3']['uid']))
                      {{ $order['fri']['other3']['content'] }}
                    @else
                      <b>Available</b>
                    @endif
                    </a>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>

      </div>

    </div>
</div>
@endsection
