<fieldset>
    <legend>目前位置：首頁 ＞ 人氣文章區 ＞ </legend>

    <table>
        <tr>
            <td width="30%">標題</td>
            <td width="40%">內容</td>
            <td>人氣</td>
        </tr>

        <?php
        $rows=$News->paginate(5, ['sh'=>1], " ORDER BY goods DESC ");
        foreach($rows as $row){
        ?>
        <tr>
            <td width="30%"><?=$row['title'];?></td>
            <td width="40%"><?=mb_substr($row['text'],0,50);?>...</td>
            <td></td>
        </tr>
        <?php
        }
        ?>
    </table>

    <div class='ct'><?=$News->links();?></div>



</fieldset>