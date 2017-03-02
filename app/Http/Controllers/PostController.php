<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;
    use Cache;
    use App\Http\Requests;
    use App\Http\Controllers\Controller;

    class PostController extends Controller
    {
        /**
         * 显示文章列表.
         *
         * @return Response
         */
        public function index()
        {
            //
        }

        /**
* 创建新文章表单页面
*
* @return Response
*/
public function create()
{
    $postUrl = route('post.store');
    $csrf_field = csrf_field();
    $html = <<<CREATE
        <form action="$postUrl" method="POST">
            $csrf_field
            <input type="text" name="title"><br/><br/>
            <textarea name="content" cols="50" rows="5"></textarea><br/><br/>
            <input type="submit" value="提交"/>
        </form>
CREATE;
    return $html;
}

/**
* 将新创建的文章存储到存储器
*
* @param Request $request
* @return Response
*/
public function store(Request $request)
{
    $title = $request->input('title');
    $content = $request->input('content');
    $post = ['title'=>trim($title),'content'=>trim($content)];

    $posts = Cache::get('posts',[]);
    
    if(!Cache::get('post_id')){
        Cache::add('post_id',1,60);
    }else{
        Cache::increment('post_id',1); 
    }
    $posts[Cache::get('post_id')] = $post;

    Cache::put('posts',$posts,60);
    return redirect()->route('post.show',['post'=>Cache::get('post_id')]);
}

        /**
         * 显示指定文章
         *
         * @param int $id
         * @return Response
         */
        public function show($id)
        {
            //
        }

        /**
         * 显示编辑指定文章的表单页面
         *
         * @param int $id
         * @return Response
         */
        public function edit($id)
        {
            //
        }

        /**
         * 在存储器中更新指定文章
         *
         * @param Request $request
         * @param int $id
         * @return Response
         */
        public function update(Request $request, $id)
        {
            //
        }

        /**
         * 从存储器中移除指定文章
         *
         * @param int $id
         * @return Response
         */
        public function destroy($id)
        {
            //
        }
    }
