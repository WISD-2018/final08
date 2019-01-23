<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## 二手書交易平台
<blockquote class="imgur-embed-pub" lang="en" data-id="Bsh0OpC"><a href="//imgur.com/Bsh0OpC">View post on imgur.com</a></blockquote><script async src="//s.imgur.com/min/embed.js" charset="utf-8"></script>
我們做一個網站讓學生可以在此網站買賣課本，想買課本的人可以利用學校科系分類機制來找到該科目的教科書，想賣課本的人將課本上架後也較容易被同校同系的學弟妹看到，增加賣出去的機會，買家賣家都可以藉由這個網站來順利完成課本的交易，節省以往在其他地方買賣課本上多浪費的時間。

##系統的主要功能

前台
- 新增書籍 Route::get('/ProductCreate')[3A532065 張宏瑋](https://github.com/3A532065)
- 刪除書籍 Route::delete('product/{id}')[3A532065 張宏瑋](https://github.com/3A532065)
- 修改書籍 Route::get('product/{id}/edit') [3A532065 張宏瑋](https://github.com/3A532065)
- 買書籍 Route::get('product/{id}/buy')[3A532065 張宏瑋](https://github.com/3A532065)
- 觀看買書紀錄 Route::get('/MemberOrder')[3A532065 張宏瑋](https://github.com/3A532065)
- 搜尋書籍 Route::get('/search')[3A532077 賴律妏](https://github.com/3A532077)
- 書籍分類 Route::get('/class')[3A532077 賴律妏](https://github.com/3A532077)



##初始專案與DB、migration建立、關聯

- 初始專案 [3A532077 賴律妏](https://github.com/3A532077)
- 資料庫及資料表建立 [3A532077 賴律妏](https://github.com/3A532077)


##額外使用的套件或樣板


## 系統復原步驟

1. >複製https://github.com/WISD-2018/final09.git本系統在GitHub的專案，打開Source tree，點選clone後

2. >打開cmder，切換至專案所在資料夾，cd final09

3. >輸入以下命令，以復原此系統：
-composer install
-composer run‐script post‐root‐package‐install
-composer run‐script post‐create‐project‐cmd
開啟UwAmp，點選PHPMyAdmin，進入MySQL，建立新資料庫，名稱為final08，將final08.sql匯入(wagon\uwamp\www\final09\database\final08.sql)
在UwAmp下，點選Apache config，選擇port 8000 ，並在Document Root 輸入{DOCUMENTPATH}/final08/public

##系統使用帳號

123456@gmail.com  密碼：123456