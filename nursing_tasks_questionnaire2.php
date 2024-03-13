<!DOCTYPE html>
<html lang="ja">
  <head>
      <meta charset="UTF-8">
      <title>一般病棟における看護業務の把握と分類に関するアンケート調査</title>
      <link rel=”stylesheet” href=”一般病棟における看護業務の把握と分類に関するアンケート調査”>
      <style>
          h1 {line-height: 1.0;}
          h2 {line-height: 1.0;}

        table {
          border-collapse: collapse;
          width: 100%;
          /* table-layout: fixed; */
          border: 1px solid black; /* 境界線の設定 */
        }

        th{
          background-color: lightblue; /* 見出しセルの背景色を灰色に設定 */
          text-align: center; /* テキストの中央寄せ */
          padding: 10px; /* セル内の余白設定 */
        }

        /* tbody tr:nth-child(even) {
          background-color: #f2f2f2; 偶数業の背景色を変える
        } */
        
        tr:hover {
          background-color: #ddd; /* マウスオーバー時に行の背景色を灰色に設定 */
        }
        
        td {
          text-align: center; /* セル内のテキストを中央揃え */
          padding: 6px; /* セル内の余白調整 */
        }

        textarea {
          font-size: 1rem;
          letter-spacing: 1px;
        }
      </style>
  </head>

  <body>
    <h1>「一般病棟における看護業務の把握と分類」に関する調査</h1>
    <h1>調査へのご協力よろしくお願いします</h1><br>

    <h2>調査票は下記の項目で構成しています。</h2>
    <h2>「Ⅰ．回答者の基本属性について」</h2>
    <h2>「Ⅱ．日々の看護業務の実施状況について」</h2>
    <h2>「Ⅲ．情報技術による支援方法について」</h2><br>

    <h2>1. 名前と年齢を教えてください。</h2>   
      <form action="submit.php" method="post">
          <label for="name">名前</label>
          <input type="text" id="name" name="name">
          <label for="age">年齢</label>
          <select> 
          <?php
          for ($i=20; $i<=60; $i++) {
            echo "<option>" . $i . "歳</option>";
            }
          ?>
          </select><br>    
      </form>
        
    <h2>2. 性別を教えてください。</h2>
      <form action="submit.php" method="post">
          <input type="radio" id="man" name="man[]" value="男性"> <label for="man">男性</label>
          <input type="radio" id="woman" name="woman[]" value="女性"> <label for="woman">女性</label>
          <input type="radio" id="other" name="other[]" value="その他"> <label for="other">その他</label>
      </form>
    
    <h2>3. 最終学歴を教えてください。</h2>
      <form action="submit.php" method="post">
        <input type="radio" id="専門学校（２年）" name="専門学校（２年）[]" value="専門学校（２年）">
        <label for="専門学校（２年）">専門学校（２年）</label>
        <input type="radio" id="専門学校（３年）" name="専門学校（3年）[]" value="専門学校（３年）">
        <label for="専門学校（３年）">専門学校（３年）</label><br>
        <input type="radio" id="短期大学（２年）" name="短期大学（２年）[]" value="短期大学（２年）">
        <label for="短期大学（２年）">短期大学（２年）</label>
        <input type="radio" id="短期大学（３年）" name="短期大学（3年）[]" value="短期大学（３年）">
        <label for="短期大学（３年）">短期大学（３年）</label><br>
        <input type="radio" id="大学" name="大学[]" value="大学">
        <label for="大学">大学</label>
        <input type="radio" id="大学院（修士）" name="大学院（修士）[]" value="大学院（修士）">
        <label for="大学院（修士）">大学院（修士）</label>
        <input type="radio" id="大学院（博士）" name="大学院（博士）[]" value="大学院（博士）">
        <label for="大学院（博士）">大学院（博士）</label><br>
        <label for="その他">その他</label>
        <input type="text" id="その他" name="その他[]" value="">
      </form>

    <h2>4. 所属する病棟を教えてください。</h2>
      <form action="submit.php" method="post">
        <select name="ward">
            <option value="北病棟">北病棟</option>
            <option value="南病棟">南病棟</option>
            <option value="中病棟">中病棟</option>
            <option value="積貞棟">積貞棟</option>
        </select>
        
        <select name="floor">
          <?php
          for ($i=1; $i<=8; $i++) {
            echo "<option>" . $i . "階</option>";
            }
          ?>
        </select><br>   
      </form>

    <h2>5. 現在の役職を教えてください。</h2>
      <form action="submit.php" method="post">
        <input type="radio" id="一般看護師" name="一般看護師[]" value="一般看護師">
        <label for="一般看護師">一般看護師</label>
        <input type="radio" id="リーダー看護師" name="リーダー看護師[]" value="リーダー看護師">
        <label for="リーダー看護師">リーダー看護師</label><br>
        <input type="radio" id="管理職（師長・主任）" name="管理職（師長・主任）[]" value="管理職（師長・主任）">
        <label for="管理職（師長・主任）">管理職（師長・主任）</label>
        <label for="その他">その他</label>
        <input type="text" id="その他" name="その他[]" value="">
      </form>

    <h2>6. 看護師のこれまでの経験領域を教えてください。（複数回答可）</h2>
      <form action="submit.php" method="post">
      <input type="checkbox" id="救急" name="救急[]" value="救急">
      <label for="救急">救急</label>
      <input type="checkbox" id="急性期" name="急性期[]" value="急性期">
      <label for="急性期">急性期</label>
      <input type="checkbox" id="慢性期" name="慢性期[]" value="慢性期">
      <label for="慢性期">慢性期</label>
      <input type="checkbox" id="精神" name="精神[]" value="精神">
      <label for="精神">精神</label>
      <input type="checkbox" id="小児" name="小児[]" value="小児">
      <label for="小児">小児</label><br>
      <input type="checkbox" id="母性・助産" name="母性・助産[]" value="母性・助産">
      <label for="母性・助産">母性・助産</label>
      <input type="checkbox" id="地域" name="地域[]" value="地域">
      <label for="地域">地域</label>
      <input type="checkbox" id="在宅" name="在宅[]" value="在宅">
      <label for="在宅">在宅</label>
      <label for="その他">その他</label>
      <input type="text" id="その他" name="その他[]" value="">
      </form>
    
    <h2>7. 看護師の経験年数、京大病院での経験年数を教えてください。</h2>
      <form action="submit.php" method="post">
        <label for="看護師の経験年数">看護師の経験年数</label>
        <select name="看護師の経験年数">
        <?php
        for ($i=1; $i<=40; $i++) {
          echo "<option>" . $i . "年目</option>";
          }
        ?>
        </select>

        <label for="京大病院での経験年数">京大病院での経験年数</label>
        <select name="京大病院での看護師の経験年数">
        <?php
        for ($i=1; $i<=40; $i++) {
          echo "<option>" . $i . "年目</option>";
          }
        ?>
        </select>
      </form>

    <input type="submit" value="送信">
    <a href=””>次のページへ</a>


    <h2>「Ⅱ．日々の看護業務の実施状況について」</h2><br>
      <!-- 業務名のまとめ -->
      <?php
      // 清潔業務
      $task_names_seiketu = array(
        "清潔",
        "（1）全身清拭", 
        "（2）部分清拭", 
        "（3）セルフ清拭(タオルを渡す)",	
        "（4）シャワー浴",		
        "（5）入浴",
        "（6）手浴",
        "（7）足浴",
        "（8）洗髪",
        "（9）ひげ剃り",		
        "（10）爪切り",
        "（11）陰部洗浄",
        "（12）寝衣交換",
        "（13）口腔ケア(全介助)",
        "（14）口腔ケア(部分介助:物品準備、仕上げ)",		
        "（15）モーニングケア(歯磨きと顔拭き)"
      );
      // 食事業務
      $task_names_syokuji = array(
        "食事",
        "（16）全介助", 
        "（17）部分介助", 
        "（18）経管栄養(胃管、胃瘻から)「注入時間は含まない」",	
        "（19）とろみの調整",		
        "（20）摂取量の観察",
        "（21）配膳",
        "（22）下膳",
      );
      // 排泄業務
      $task_names_haisetu = array(
        "排泄",
        "（23）排便・排尿の介助", 
        "（24）おむつ交換", 
        "（25）人工肛門ケア",	
        "（26）浣腸",		
        "（27）導尿(一時的・持続的)",
        "（28）留置カテーテルの管理",
      );
      // 移送業務
      $task_names_isou = array(
        "移送",
        "（29）付き添い", 
        "（30）車椅子", 
        "（31）ストレッチャー",	
      );
      // 観察・測定業務
      $task_names_kansatu_sokutei = array(
        "観察・測定",
        "（32）症状観察(合併症、疾患の特徴など)", 
        "（33）ADL・安静度の確認", 
        "（34）バイタルサイン測定(体温、脈拍、呼吸数、血圧)",	
        "（35）聴診(肺音、腸蠕動音など)",		
        "（36）尿量",
        "（37）体重",
        "（38）身長",
        "（39）腹囲",		
        "（40）CVP",
        "（41）病室の巡視",
      );
      // 安全業務
      $task_names_anzen = array(
        "安全",
        "（42）見守りセンサの装着", 
        "（43）個人用防護具の装着", 
        "（44）身体拘束の管理(皮膚の観察、ゆるみ確認など)",	
      );
      // 安楽業務
      $task_names_anraku = array(
        "安楽",
        "（45）体位変換(安楽、褥瘡予防)", 
        "（46）除圧(褥瘡予防)", 
        "（47）マット選択(褥瘡予防)",	
        "（48）冷罨法(氷枕、氷嚢など)",		
        "（49）温罨法(湯たんぽ、電気毛布など)",
        "（50）環境整備(睡眠の導入にむけた？)",
      );
      // 薬剤・輸液業務
      $task_names_yakuzai_yueki = array(
        "薬剤・輸液",
        "（51）単発点滴(抗生剤など)", 
        "（52）持続点滴(Main、Volumeの更新)", 
        "（53）ワンショット注射(静脈注射、皮下注射、筋肉注射)",	
        "（54）輸血(RBC、FFP、PC)",		
        "（55）中心静脈栄養(IVH・TPN)の管理(ミキシング、投与)",
        "（56）内服",
        "（57）塗布",
        "（58）貼付",		
        "（59）座薬の挿入",
        "（60）点眼、耳、鼻",
        "（61）注腸(胃瘻、腸瘻から薬剤注入)",
        "（62）経管(胃管などから薬剤注入)",
      );
      // 術前・術後業務
      $task_names_jutuzen_jutugo = array(
        "術前・術後",
        "（63）剃毛(術前)", 
        "（64）浣腸(術前)", 
        "（65）絶食を患者に伝える、札を渡す(術前)",	
        "（66）前投薬(術前)",		
        "（67）フットポンプの装着(術後)",
        "（68）ルート整理(術後)",
      );
      // 入退院業務
      $task_names_nyutaiin = array(
        "入退院",
        "（69）病室環境の説明(入院)", 
        "（70）身長と体重の測定(入院)", 
        "（71）病歴聴取(入院)",	
        "（72）転倒転落リスク評価(入院・転入)",		
        "（73）せん妄リスク評価(入院・転入)",
        "（74）次回の来院日を伝える(退院)",
        "（75）食事指導(退院)", 
        "（76）浣腸(術前)", 
        "（77）内服指導(退院)",	
        "（77）日常生活の注意(退院)",		
        "（78）退院処方を渡す(退院)",
      );
      // 診療・治療業務
      $task_names_sinryou_tiryou = array(
        "診療・治療",
        "（79）リハビリ(運動、呼吸など)", 
        "（80）洗浄(創傷処置)", 
        "（81）ドレッシング剤交換",	
        "（82）包帯交換",		
        "（83）静脈カテーテル(V-Line)の挿入",
        "（84）静脈カテーテル(V-Line)の抜去",
        "（85）穿刺の介助(中心静脈カテーテル、胸腔など)", 
        "（86）抜去の介助(中心静脈カテーテル、胸腔など)", 
      );
      // 呼吸ケア業務		
      $task_names_kokyukea = array(
        "呼吸ケア",
        "（87）酸素投与量の確認", 
        "（88）呼吸器の設定確認(NPPV、NHFなど)", 
        "（89）酸素吸入装置(ネーザルカニューラ、フェイスマスク)の変更",	
        "（90）体位ドレナージ",		
        "（91）スクイージング(用手的呼吸介助法)",
        "（92）喀痰吸引",
        "（93）超音波ネブライザー", 
      );
      // 生理検査
      $task_names_seirikensa = array(
        "生理検査",
        "（94）検査前の説明(オリエンテーション)", 
        "（95）心電図", 
        "（96）内視鏡検査の介助",	
      );
      // 検体検査  
      $task_names_kentaikensa = array(
        "検体検査",
        "（97）採血 患者の状態を考慮しない一文を書く！", 
        "（98）採尿", 
        "（99）採便",	
        "（100）痰",		
        "（101）胃液",
        "（102）胆汁",
      );
      // 医師・看護師間業務
      $task_names_isi_kangosi = array(
        "医師・看護師間",
        "（103）指示受け", 
        "（104）申し送り", 
        "（105）病棟カンファレンス",	
      );
      // 記録業務
      $task_names_kiroku = array(
        "記録",
        "（106）看護記録", 
        "（107）看護計画の立案", 
        "（108）看護計画の評価",	
        "（109）転院・退院時の看護サマリ", 
        "（110）使用物品のシールを台紙に貼る", 
      );
      // 整備業務
      $task_names_seibi = array(
        "整備",
        "（111）包交車の整備", 
        "（112）救急カートの整備", 
      );
      // その他
      $task_names_sonota = array(
        "その他",
        "（113）面会人の案内", 
        "（114）休憩", 
      );
      // 全てまとめた看護業務
      $nursing_all_tasks = array($task_names_seiketu, $task_names_syokuji, $task_names_haisetu, $task_names_isou, $task_names_kansatu_sokutei, $task_names_anzen, $task_names_anraku
      , $task_names_yakuzai_yueki, $task_names_jutuzen_jutugo, $task_names_nyutaiin, $task_names_sinryou_tiryou, $task_names_kokyukea, $task_names_seirikensa, $task_names_kentaikensa, $task_names_isi_kangosi, $task_names_kiroku,$task_names_seibi,$task_names_sonota
      );
    ?>

    
      <p>記載例の画像を入れる！</p>
      
        <thead>
          <tr>
          <table border="1">
            <th width="16%">業務名</th>
            <th width="5%">①実施</th>
            <th width="10%">②業務に必要な時間<br>(準備・実施・片付けを含む)</th>
            <th width="15%">③実施を判断する情報</th>
            <th width="10%">④業務の難易度</th>
            <th width="10%">⑤優先順位</th>
          </tr>

          <!-- 幅の調整方法がおかしい？ -->

          <tr>
            <table border="1">
            <td width="16%">統合セル</td>
            <td width="5%">統合セル</td>
            <!-- <td width="21%" colspan="2">統合セル</td> -->
            <td width="10%"><img src="時間スケール.png" alt='時間スケール' width='190' height='140'></td>
            <td width="15%"><img src="情報源.png" alt='情報源' width='125' height='150'></td>
            <td width="10%"><img src="難易度.png" alt='難易度' width='180' height='160'></td>
            <td width="10%"><img src="優先順位.png" alt='優先順位' width='180' height='160'></td> 
            <td width="10%"><img src="優先順位0ver.png" alt='優先順位' width='180' height='160'></td> 
          </tr>

          <tr>
            <td width="16%">統合セル</td>
            <td width="5%">統合セル</td>
            <td width="10%" style='text-align: left;'>A：1~5分<br>B：6～10分<br>C：11～15分<br>D：16～20分<br>E：21～25分<br>F：26分以上</td>
            <td width="10%" style='text-align: left;'>A：1~5分　 　B：6～10分<br>C：11～15分　D：16～20分<br>E：21～25分　F：26分以上</td>
            <td width="15%" style='text-align: left;'>A：電子カルテ<br>B：病棟のルール<br>C：患者の状態</td>
            <td width="10%" style='text-align: left;'>5：難しい<br>4：やや難しい<br>3：どちらともいえない<br>2：あまり難しくない<br>1：難しくない</td>
            <td width="10%" style='text-align: left;'>5：優先する<br>4：やや優先する<br>3：どちらともいえない<br>2：あまり優先しない<br>1：優先しない</td>
            <td width="10%" style='text-align: left;'>2：優先する<br>1：やや優先する<br>0：どちらともいえない<br>-1：あまり優先しない<br>-2：優先しない</td>
          </tr>
        </thead> 

        <tbody>
        <table border="1">     
          
        <?php foreach($nursing_all_tasks as $task_names) {
          echo "<tr>";
          echo "<td colspan='6'>{$task_names[0]}に関する業務</td>";
          echo "</tr>"; 
          
          foreach(array_slice($task_names, 1) as $name) {
            echo "<tr>";
              // 業務名
              echo "<td width=17% style='text-align: left;'><label for='" . $name . "'>" . $name . "</label></td>";
            
              // 業務の実施の有無        無の場合、これ以降を記入しないシステムが作成する
              echo "<td width=5%>";
                echo"<form>";
                echo "<input type='radio' name='implementation' value='有'>有　";
                echo "<input type='radio' name='implementation' value='無'>無";
                echo"</form>";
              echo "</td>";
          
              // 実施時間
              echo "<td width=15%>";
                echo"<form>";
                  echo "<input type='radio' name='task_time' value='1~5分'>A　";
                  echo "<input type='radio' name='task_time' value='6～10分'>B　";
                  echo "<input type='radio' name='task_time' value='11～15分'>C　";
                  echo "<input type='radio' name='task_time' value='16～20分'>D　";
                  echo "<input type='radio' name='task_time' value='21～25分'>E　";
                  echo "<input type='radio' name='task_time' value='26分以上'>F";
                echo"</form>";
              echo "</td>";
            
              // 実施を判断する情報源
              echo "<td width=15%>";
                echo"<form>";
                echo "<input type='radio' name='Information_implementation' value='電子カルテ'>A　";
                echo "<input type='radio' name='Information_implementation' value='病棟のルール'>B　";
                echo "<input type='radio' name='Information_implementation' value='患者の状態'>C";
                echo"</form>";
              echo "</td>";

              //  業務の難易度
              echo "<td width=10%>";
                echo"<form>";
                  echo "<input type='radio' name='difficulty_level' value='難しい'>5　";
                  echo "<input type='radio' name='difficulty_level' value='やや難しい'>4　";
                  echo "<input type='radio' name='difficulty_level' value='どちらともいえない'>3　";
                  echo "<input type='radio' name='difficulty_level' value='あまり難しくない'>2　";
                  echo "<input type='radio' name='difficulty_level' value='難しくない'>1";
                echo"</form>";
              echo "</td>"; 
              
              // 優先順位
              echo "<td width=10%>";
                echo"<form>";
                  echo "<select name='priority'>";
                    echo "<option value='優先する'>優先する</option>";
                    echo "<option value='やや優先する'>やや優先する</option>";
                    echo "<option value='どちらともいえない'>どちらともいえない</option>";
                    echo "<option value='あまり優先しない'>あまり優先しない</option>";
                    echo "<option value='優先しない'>優先しない</option>";
                  echo "</select>";
                echo"</form>";
                 
                // echo"<form>";
                //   echo "<input type='radio' name='priority' value='優先する'>5　";
                //   echo "<input type='radio' name='priority' value='やや優先する'>4　";
                //   echo "<input type='radio' name='priority' value='どちらともいえない'>3　";
                //   echo "<input type='radio' name='priority' value='あまり優先しない'>2　";
                //   echo "<input type='radio' name='priority' value='優先しない'>1";
                // echo"</form>";

              echo "</td>"; 
            echo "</tr>";
          }
          }
          ?>

        </tbody>
        </table>
        <a href=”ｇｇｇｇｇ">次のページへ</a>
    
    <h2>「Ⅲ．情報技術による支援方法について」</h2>
      <div style="display: flex; align-items: center;">
        <div style="flex: 1;">
          <p>1日の看護業務をスケジューリングするシステムがあれば使用したいですか？<br>
          下にイメージ図と説明があります。<br>
          右の数字のどれか1つに〇を付けてください。(7段階)</p>
        <!-- </div>
        <div style="flex: 1;"> -->
          <img src='スケジューリングシステムイメージ図.png' alt='イメージ図' width='600' height='300'>
        </div>
        <div style="flex: 1;">
          <img src='情報システムの評価.png' alt='システムの評価' width='300' height='200'>
          <img src='情報システムの評価5段階.png' alt='システムの評価' width='200' height='150'>
        </div>
      </div><br><br>

      <div style="display: flex;">
        <div style="flex: 1;">    
          <p>1. 使用したいorしたくない理由を教えてください。</p>
            <form action="submit.php" method="post">
              <textarea id="使用or使用したくない理由" name="use_reason[]" rows="5" cols="60" size="500" style="height:150px"></textarea>
            </form>
        </div>  
      
        <div style="flex: 1;">
          <p>2. その他、ご自由にお書きください。</p>
            <form action="submit.php" method="post">
              <textarea id="その他の意見" name="other_reason[]" rows="5" cols="60" size="500" style="height: 150px"></textarea>
            </form>
        </div>  
      </div>

      <input type="submit" value="送信">
      <h2>これで、アンケート調査は終了となります。<br>ご協力ありがとうございました。</h2>

  </body>
</html>