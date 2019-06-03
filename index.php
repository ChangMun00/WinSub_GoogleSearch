<!DOCTYPE html>
<html lang="ko">

<!---헤드--->

  <head>   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="WinSubGoogleSearch">
    <meta name="author" content="WinSubGoogleSearch">
<meta name="theme-color" content="#D8D8D8">
    <title>Search</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Gothic+Coding|Righteous&display=swap" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(function () {
$("[id^=text]").hide();

$(".button:not(.float_l)").click(function (e) {
e.stopPropagation();

$("[id^=text]").eq($(this).index()).toggle();
});
});
</script>
  </head>

<body>
        <section>
        <div class="container">
        <center><font class="winsub" size="10px">WinSub.kr</font></center>
<form action="http://www.google.com/search" id="search" method="get">
        <div class="form-group">
          <label class="label-control">
            <span class="label-text">Search To...</span>
          </label>
          <input type="text" name="q" class="form-control"/>
        </div>
    </form>
</div>
</section>
<center>
<div class="button">
<div class="button float_l"><a href="#">설명 / 내용</a></div>
</div>
<p>
<div id="text1">
<p class="text">해당페이지는 검색할시 구글에 검색 결과가 나오는 페이지입니다.</p>
<font size="3" class="text">윈섭에서 최대한 심플하게 만든 페이지 입니다.</font>
</div>
</p>
</center>
</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script type="text/javascript">
$(window).load(function(){
  $('.form-group input').on('focus blur', function (e) {
      $(this).parents('.form-group').toggleClass('active', (e.type === 'focus' || this.value.length > 0));
  }).trigger('blur');
});
</script>
