
// $(function(){
//   $('.deletebtn').checkDelete(){
//     if(window.confirm('削除しますか？')){
//       return true;
//     } else {
//       return false;
//     }
//   }
// })
//
// $(".deletebtn").click(function() {
//    if(!confirm("削除を実行しますか？")) {
//      return false;
//    } else {
//      return $flag = 1;
//    }
//  });
//
// function deletebtn(){
//   if(!confirm("削除を実行しますか？")) {
//     return false;
//   } else {
//     return $flag = 1;
//   }
// };

// $(function(){
//     $('#greet').click(function(){
//     	if(!$('#user').val() || !$('#message').val()) return;
//         $.get('bbs.php', {
//         	user: $('#user').val(),
//         	message: $('#message').val(),
//         	mode: "0" // 書き込み
//         }, function(data){
//         	$('#result').html(data);
//         	// scTarget();
//         });
//     });
//     loadLog();
//     logAll();
// });
//
// // ログをロードする
// function loadLog(){
// 	$.get('bbs.php', {
// 		mode: "1" // 読み込み
//     }, function(data){
//     	$('#result').html(data);
//     	// scTarget();
//     });
// }
//
// // 一定間隔でログをリロードする
// function logAll(){
// 	setTimeout(function(){
// 		loadLog();
// 		logAll();
// 	},5000); //リロード時間はここで調整
// }

// ajax
// $(function(){
//   // 送信(talk_btn)をクリックしてajax通信を行う
//   $('.talk_btn').click(function(){
//     $.ajax({
//       // url     : '/Talk.php',
//       url     : 'http://localhost:8888/Models/Talk.php',
//       type    : 'POST',
//       dataType: 'json',
//       data    : {
//         'message' : $('input[name="message"]').val() }
//     }).done(function(data){
//       //通信成功時
//       alert('通信成功');
//
//     }).fail(function(data){
//       // 通信失敗時
//       console.log(data);
//     });
//   });
// });

// XMLHttpRequestオブジェクトの作成
// var request = new XMLHttpRequest();
//
// // URLを開く
// request.open('POST', 'http://localhost:8888/Models/Talk.php', true);
//
// // レスポンスが返ってきた時の処理を記述
// request.onload = function () {
//   // レスポンスが返ってきた時の処理
// }
// // リクエストをURLに送信
// request.send();


// var request = new XMLHttpRequest();
//
// request.open('POST', 'http://localhost:8888/Players/Talk0.php', true);
// request.setRequestHeader('content-type', 'application/x-www-form-urlencoded;charset=UTF-8');
// request.responseType = 'json';
//
// request.onload = function () {
//   var data = this.response;
//   var node = document.getElementById("result");
//   node.innerHTML =  JSON.stringify(data);
//     console.log(request.response);
// };
// //console.log(request.onload);
// request.send();


// $(function(){
//   $('.talk_btn').click(function(){
//     alert('ttt');
//   })
// })


//
// $(function() {
//     $('.talk_btn').click(function() {
//         // Ajax通信を開始する
//         $.ajax({
//             type: "POST",
//             url: 'talk.php',
//             success: function() {
//                 console.log('成功');
//             },
//             error: function(){
//                 console.log('失敗');
//             }
//         })
//     });
// });


// $(function(){
//     //.sampleをクリックしてajax通信を行う
//     $('.sample_btn').click(function(){
//         $.ajax({
//             url: '/ajax/test_db.php',
//             type: 'GET',
//             /* json形式で受け取るためdataTypeを変更 */
//             dataType: 'json',
//             data : {
//                 gender : $('[name="gender"]').val(),
//                 type : $('[name="type"]').val()
//             }
//         }).done(function(data){
//             /* 通信成功時 */
//             var html_response = '<ul>';
//             //json形式で受け取った配列を.each()で繰り返し、ul > liリストにする
//             $.each(data, function(key, value){
//                 html_response += '<li>' + value + '</li>';
//             });
//             html_response += '</ul>';
//             $('.result').html(html_response); //取得したHTMLを.resultに反映
//
//         }).fail(function(data){
//             /* 通信失敗時 */
//             alert('通信失敗！');
//
//         });
//     });
// });
