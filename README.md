## 開発環境構築

公開側、管理側はそれぞれ別のLaravelプロジェクトになっています。


```
nursery_search/
 ├ nursery_search/
 ├ nursery_search_admin/
 └ docker_nsa/
```

※一度コンテナを再作成してください。

```
$ cd docker_nsa
$ docker-compser build apache2 php-fpm mysql 
```

### 起動方法

docker_nsaフォルダ直下で

```
$ docker-compose up -d apache2 php-fpm mysql phpmyadmin
```

### アクセス方法

- 公開側
  - ```http://localhost/nursery/```
- 管理側
  - ```http://localhost/nursery_admin/```
