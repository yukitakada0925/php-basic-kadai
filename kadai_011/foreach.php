<p>
        <?php
        $stock = [
            '名前' => '玉ねぎ',
            '値段' => 200,
            '産地' => '北海道',
        ];

         //  配列$stockの要素を1つずつ順番に出力する
         foreach ($stock as $key=>$value) {
          echo "{$key}：{$value}<br>";
      }
        ?>
    </p>