@extends('layouts.master') 

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
				<div class="panel-heading">About</div>
	                <div class="panel-body">
	                	<!-- <strong>This site is my entertainment applet, the following instructions for the Hash rules</strong>
	                	<hr>
	                	<ul>
	                		<li>File name rules: get the md5 value of the content of the document, and then converted it into 36 bit to shorten the file name/li>
	                		<li></li>
	                		<li></li>
	                	</ul> -->
						<strong>此网站为本人娱乐小程序，以下说明为Hash的规则</strong>
						<hr>
						<ul>
							<li>文件名字规则：对文件内容md5，然后将md5值转换成36进制，以缩短文件名</li>
							<li>一级目录规则：从文件md5值的末尾开始取两个字节中的13位作为一级目录的路径名称</li>
							<li>二级目录规则：再取第三四字节中的13位作为二级目录的路径名称</li>
						</ul>
						<br>
						<strong>说明</strong>
						<hr>
						<ul>
							<li>取两个字节中的13位可以保证有8k个目录，若不需要可以适当减少</li>
							<li>限制单个上传的文件最大为2M⚠️</li>
							<li>有任何问题可以<a href="/contact">联系我</a></li>
						</ul>
						<br>
						<strong>备注</strong>
						<hr>
						<ul>
							<li>18年2月1日升级站点php版本到7.2.1</li>
							<li>18年2月2日升级站点框架到 <a href="https://laravel.com/">laravel5.5</a> </li>
						</ul>
	                </div>
                </div>
			</div>
		</div>
	</div>
</div>

@endsection
