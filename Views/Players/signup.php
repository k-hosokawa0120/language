<?php
  require_once(ROOT_PATH .'Controllers/PlayerController.php');
  //$users->signin();
?>

<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>新規登録ページ</title>
   <link rel="stylesheet" type="text/css" href="/css/base.css">
   <link rel="stylesheet" type="text/css" href="/css/style.css">
   <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
   <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
    <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
  <div class="border col-7">
      <br>
      <h2>新規登録</h2>
      <br>
      <div class="row">
          <div class="col-md">
            <!-- <form action="signupcom.php" method="POST" enctype="multipart/form-data">

            </form> -->
  <form action="signupcom.php" method="post" enctype="multipart/form-data"><!-- 処理を行う宛先を指定 -->
    <!-- <div class="form-group" hidden>
      　<input type="file" name="uploadfile" src="/img/user.png" class="form-control" size="20">
    </div> -->

    <!-- <input type="submit" value="アップロード"> -->


    <div class="form-group">
        <label>氏名：</label>
        <input type="text" class="form-control" name="name" placeholder="山田太郎" required>
    </div>
    <div class="form-group">
        <label>フリガナ：</label>
        <input type="text" class="form-control" name="kana" placeholder="ヤマダタロウ" required>
    </div>
    <div class="form-group">
        <label>表示する名前：</label>
        <input type="text" class="form-control" name="nickname" placeholder="タロウ" required>
    </div>
    <div class="form-group">
        <label>性別：</label>
        <select class="form-control" name="sex" required>
            <option value="" disabled selected>選択してください</option>
            <option value="男">男</option>
            <option value="女">女</option>
        </select>
    </div>
    <div class="form-group">
        <label>年齢：</label>
        <select class="form-control" name="age" required>
            <option value="" disabled selected>選択してください</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
            <option value="32">32</option>
            <option value="33">33</option>
            <option value="34">34</option>
            <option value="35">35</option>
            <option value="36">36</option>
            <option value="37">37</option>
            <option value="38">38</option>
            <option value="39">39</option>
            <option value="40">40</option>
            <option value="41">41</option>
            <option value="42">42</option>
            <option value="43">43</option>
            <option value="44">44</option>
            <option value="45">45</option>
            <option value="46">46</option>
            <option value="47">47</option>
            <option value="48">48</option>
            <option value="49">49</option>
            <option value="50">50</option>
            <option value="51">51</option>
            <option value="52">52</option>
            <option value="53">53</option>
            <option value="54">54</option>
            <option value="55">55</option>
            <option value="56">56</option>
            <option value="57">57</option>
            <option value="58">58</option>
            <option value="59">59</option>
            <option value="60">60</option>
            <option value="61">61</option>
            <option value="62">62</option>
            <option value="63">63</option>
            <option value="64">64</option>
            <option value="65">65</option>
            <option value="66">66</option>
            <option value="67">67</option>
            <option value="68">68</option>
            <option value="69">69</option>
            <option value="70">70</option>
            <option value="71">71</option>
            <option value="72">72</option>
            <option value="73">73</option>
            <option value="74">74</option>
            <option value="75">75</option>
            <option value="76">76</option>
            <option value="77">77</option>
            <option value="78">78</option>
            <option value="79">79</option>
            <option value="80">80</option>
            <option value="81">81</option>
            <option value="82">82</option>
            <option value="83">83</option>
            <option value="84">84</option>
            <option value="85">85</option>
            <option value="86">86</option>
            <option value="87">87</option>
            <option value="88">88</option>
            <option value="89">89</option>
            <option value="90">90</option>
            <option value="91">91</option>
            <option value="92">92</option>
            <option value="93">93</option>
            <option value="94">94</option>
            <option value="95">95</option>
            <option value="96">96</option>
            <option value="97">97</option>
            <option value="98">98</option>
            <option value="99">99</option>
            <option value="100">100</option>
            <option value="101">101</option>
            <option value="102">102</option>
            <option value="103">103</option>
            <option value="104">104</option>
            <option value="105">105</option>
            <option value="106">106</option>
            <option value="107">107</option>
            <option value="108">108</option>
            <option value="109">109</option>
            <option value="110">110</option>
            <option value="111">111</option>
            <option value="112">112</option>
            <option value="113">113</option>
            <option value="114">114</option>
            <option value="115">115</option>
            <option value="116">116</option>
            <option value="117">117</option>
            <option value="118">118</option>
            <option value="119">119</option>
            <option value="120">120</option>
        </select>
    </div>
    <div class="form-group"  required>
        <label>メールアドレス：</label>
        <input type="text" class="form-control" name="email" placeholder="xxx@xxx.xx">
    </div>
    <div class="form-group" name="tell" required>
        <label>電話番号：</label>
        <input type="text" class="form-control" name="tell" placeholder="08012345678">
    </div>
    <div class="form-group">
        <label>居住地：</label>
        <select class="form-control" name="residence" required>
        <option value="" disabled selected>選択してください</option>
        <option value="北海道">北海道</option>
        <option value="青森県">青森県</option>
        <option value="岩手県">岩手県</option>
        <option value="宮城県">宮城県</option>
        <option value="秋田県">秋田県</option>
        <option value="山形県">山形県</option>
        <option value="福島県">福島県</option>
        <option value="茨城県">茨城県</option>
        <option value="栃木県">栃木県</option>
        <option value="群馬県">群馬県</option>
        <option value="埼玉県">埼玉県</option>
        <option value="千葉県">千葉県</option>
        <option value="東京都">東京都</option>
        <option value="神奈川県">神奈川県</option>
        <option value="新潟県">新潟県</option>
        <option value="富山県">富山県</option>
        <option value="石川県">石川県</option>
        <option value="福井県">福井県</option>
        <option value="山梨県">山梨県</option>
        <option value="長野県">長野県</option>
        <option value="岐阜県">岐阜県</option>
        <option value="静岡県">静岡県</option>
        <option value="愛知県">愛知県</option>
        <option value="三重県">三重県</option>
        <option value="滋賀県">滋賀県</option>
        <option value="京都府">京都府</option>
        <option value="大阪府">大阪府</option>
        <option value="兵庫県">兵庫県</option>
        <option value="奈良県">奈良県</option>
        <option value="和歌山県">和歌山県</option>
        <option value="鳥取県">鳥取県</option>
        <option value="島根県">島根県</option>
        <option value="岡山県">岡山県</option>
        <option value="広島県">広島県</option>
        <option value="山口県">山口県</option>
        <option value="徳島県">徳島県</option>
        <option value="香川県">香川県</option>
        <option value="愛媛県">愛媛県</option>
        <option value="高知県">高知県</option>
        <option value="福岡県">福岡県</option>
        <option value="佐賀県">佐賀県</option>
        <option value="長崎県">長崎県</option>
        <option value="熊本県">熊本県</option>
        <option value="大分県">大分県</option>
        <option value="宮崎県">宮崎県</option>
        <option value="鹿児島県">鹿児島県</option>
        <option value="沖縄県">沖縄県</option>
        </select>
    </div>
     <div class="form-group" required>
        <label>出身国：</label>
        <select class="form-control" name="country">
            <option value="" disabled selected>選択してください</option>
            <option>日本</option>
            <option>中国</option>
            <option>韓国</option>
            <option>ベトナム</option>
            <option>フィリピン</option>
            <option>ブラジル</option>
            <option>台湾</option>
            <option>アメリカ</option>
            <option>ネパール</option>
            <option>インドネシア</option>
            <option>タイ</option>
            <option>ペルー</option>
            <option>インド</option>
            <option>朝鮮</option>
            <option>スリランカ</option>
            <option>イギリス</option>
            <option>ミャンマー</option>
            <option>オーストラリア</option>
            <option>フランス</option>
            <option>カナダ</option>
            <option>マレーシア</option>
            <option>パキスタン</option>
            <option>バングラデシュ</option>
            <option>ドイツ</option>
            <option>ロシア</option>
            <option>カンボジア</option>
            <option>モンゴル</option>
            <option>シンガポール</option>
            <option>イタリア</option>
            <option>スペイン</option>
            <option>トルコ</option>
            <option>ボリビア</option>
            <option>ニュージーランド</option>
            <option>メキシコ</option>
            <option>イラン</option>
            <option>スウェーデン</option>
            <option>ウズベキスタン</option>
            <option>アルゼンチン</option>
            <option>ナイジェリア</option>
            <option>アフガニスタン</option>
            <option>オランダ</option>
            <option>ラオス</option>
            <option>コロンビア</option>
            <option>ルーマニア</option>
            <option>ポーランド</option>
            <option>スイス</option>
            <option>ガーナ</option>
            <option>エジプト</option>
            <option>ウクライナ</option>
            <option>パラグアイ</option>
            <option>ベルギー</option>
        </select>
    </div>
    <div class="form-group" name="teach_language" required>
        <label>教えられる言語：</label>
        <select class="form-control" name="teach_language">
            <option value="" disabled selected>選択してください</option>
            <option>日本語</option>
            <option>英語</option>
            <option>中国語</option>
            <option>韓国語</option>
            <option>ベトナム語</option>
            <option>フィリピン語</option>
            <option>ポルトガル語</option>
            <option>ネパール語</option>
            <option>インドネシア語</option>
            <option>タイ語</option>
            <option>スペイン語</option>
            <option>ヒンディー語</option>
            <option>朝鮮語</option>
            <option>シンハラ語</option>
            <option>タミル語</option>
            <option>ビルマ語</option>
            <option>フランス語</option>
            <option>マレー語</option>
            <option>ベンガル語</option>
            <option>ドイツ語</option>
            <option>ロシア語</option>
            <option>クメール語</option>
            <option>モンゴル語</option>
            <option>イタリア語</option>
            <option>スペイン語</option>
            <option>トルコ語</option>
            <option>マオリ語</option>
            <option>ペルシャ語</option>
            <option>スウェーデン語</option>
            <option>フィンランド語</option>
            <option>ウズベク語</option>
            <option>パシュトー語</option>
            <option>ダリー語</option>
            <option>オランダ語</option>
            <option>ラーオ語</option>
            <option>ルーマニア語</option>
            <option>ポーランド語</option>
            <option>アラビア語</option>
            <option>ウクライナ語</option>
        </select>
    </div>
    <div class="form-group" name="study_language" required>
        <label>教わりたい言語：</label>
        <select class="form-control" name="study_language">
            <option value="" disabled selected>選択してください</option>
            <option>日本語</option>
            <option>英語</option>
            <option>中国語</option>
            <option>韓国語</option>
            <option>ベトナム語</option>
            <option>フィリピン語</option>
            <option>ポルトガル語</option>
            <option>ネパール語</option>
            <option>インドネシア語</option>
            <option>タイ語</option>
            <option>スペイン語</option>
            <option>ヒンディー語</option>
            <option>朝鮮語</option>
            <option>シンハラ語</option>
            <option>タミル語</option>
            <option>ビルマ語</option>
            <option>フランス語</option>
            <option>マレー語</option>
            <option>ベンガル語</option>
            <option>ドイツ語</option>
            <option>ロシア語</option>
            <option>クメール語</option>
            <option>モンゴル語</option>
            <option>イタリア語</option>
            <option>スペイン語</option>
            <option>トルコ語</option>
            <option>マオリ語</option>
            <option>ペルシャ語</option>
            <option>スウェーデン語</option>
            <option>フィンランド語</option>
            <option>ウズベク語</option>
            <option>パシュトー語</option>
            <option>ダリー語</option>
            <option>オランダ語</option>
            <option>ラーオ語</option>
            <option>ルーマニア語</option>
            <option>ポーランド語</option>
            <option>アラビア語</option>
            <option>ウクライナ語</option>
        </select>
    </div>
    <div class="form-group" name="status_1" required>
        <label>シチュエーション１：</label>
        <select class="form-control" name="status_1">
            <option value="" disabled selected>選択してください</option>
            <option>スポーツ</option>
            <option>cafe</option>
            <option>食事</option>
            <option>買い物</option>
            <option>道案内</option>
        </select>
    </div>
    <div class="form-group" name="status_2" required>
        <label>シチュエーション２：</label>
        <select class="form-control" name="status_2">
            <option value="" disabled selected>選択してください</option>
            <option value="">-</option>
            <option>スポーツ</option>
            <option>cafe</option>
            <option>食事</option>
            <option>買い物</option>
            <option>道案内</option>
        </select>
    </div>
    <div class="form-group" required>
        <label>ログインパスワード：</label>
        <input type="password" class="form-control" name="password" placeholder="">
    </div>

    <div class="row center-block text-center">
      <div class="col-5">
        <input type="submit" class="btn btn-outline-primary btn-block" value="登録">
      </div>
    </div>

</form>
</div>
</div>

<form action="/PlayerController.php" method="post">
<br>
<p>既に登録済みの方は<a href="login_form.php">こちら</a></p>
<br>
</form>

</body>
</html>
