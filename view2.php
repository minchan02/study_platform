<?php
include_once('./lib.php');

        /*        $connect = mysqli_connect('localhost', 'kmc0487', 'dot0487!', 'kmc0487');
                $idx = $_GET['idx'];
                session_start();
                $sql = "SELECT * from board where idx ='{$idx}'";
                $result = $connect->query($sql);
                $rows = fetch($result);*/
                $db = new PDO("mysql:host=localhost;dbname=kmc0487;charset=utf8","kmc0487","dot0487!");
                $idx = $_GET['idx'] ?? NULL;
                $sql = "SELECT * FROM board WHERE idx = '{$idx}'";
                $row = $db->query($sql)->fetch(PDO::FETCH_OBJ);
        ?>
        <!DOCTYPE html>
        <html lang="en" dir="ltr">
          <head>
            <meta charset="utf-8">
            <title></title>
          </head>
          <body>
            <table class="view_table" align=center>
            <tr>
                    <td colspan="4" class="view_title"><?php echo $row->study ?></td>
            </tr>
            <tr>
                    <td class="view_id">작성자</td>
                    <td class="view_id2"><?php echo $row->name ?></td>
                    <td class="view_hit">과목</td>
                    <td class="view_hit2"><?php echo $row->subject ?></td>
            </tr>


            <tr>
              <td colspan="4" class="view_poulation" valign="top">
              <?php echo $row->population.'명'?></td>
              <td colspan="4" class="view_place" valign="top">
                    <?php echo $row->place?></td>
                    <td colspan="4" class="view_content" valign="top">
                    <?php echo $row->content?></td>


            </tr>
            </table>


            <!-- MODIFY & DELETE -->
            <div class="view_btn">
                    <button class="view_btn1" onclick="location.href='./index.php'">홈으로</button>
                    <button class="view_btn1" onclick="location.href='./modify.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">수정</button>

                    <button class="view_btn1" onclick="location.href='./delete.php?number=<?=$number?>&id=<?=$_SESSION['userid']?>'">삭제</button>
            </div>

          </body>
        </html>
