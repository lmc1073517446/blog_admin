# blog_admin
博客后台管理系统

- 安装laravel-admin-ext-editormd，该扩展集成了editor.md，很适合作为后台web编辑器

> composer require sharemant/laravel-admin-ext-editormd

> php artisan vendor:publish --tag=laravel-admin-ext-editormd

- 在 config/admin.php 的 extensions 数组中添加配置：
```php
'extensions' => [
    'editormd' => [
            // Set to false if you want to disable this extension
            'enable' => true,
            // Set to true if you want to take advantage the screen length for your editormd instance.
            'wideMode' => false,
            // Set to true when the instance included in larave-admin tab component.
            'dynamicMode' => false,
            // Editor.js configuration (Refer to http://pandao.github.io/editor.md/)
            'config' => 
        	[
                'path' => '/vendor/laravel-admin-ext/editormd/editormd-1.5.0/lib/',
                'width' => '100%',
                'height' => 600,
                'emoji' => true,
								'imageUpload' => true,
                'imageFormats' => ["jpg", "jpeg", "gif", "png", "bmp", "webp"],
                'imageUploadURL'=> "/admin/upload",
            ]
    ]
]
```

- 后台form组件调用：

>form->editormd('markdown');
![](http://image.zhiqiexing.com/2019-05-15-073202.png)

- 图片上传处理地址/admin/upload数据返回格式
```php
[
			'success' =>1,
			'message' => '上传成功',
			'url' => $path . '/' . $FileName //文件路径
]
```
