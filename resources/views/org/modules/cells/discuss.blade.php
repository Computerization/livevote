
<div class="item">
  @if($article->pictures->count())
  <div class="image">
    <img src="{{ URL::action('FileController@get_image',['id'=>$article->pictures->first()->id]) }}">
  </div>
  @endif
  <div class="content">
    <a class="header" href="{{ URL::action('ArticleController@show', ['id' => $article->id]) }}">
      {{ $article->title }}
    </a>
    <div class="description">
      <p>
        @include('user.cells.namecard_small', ['user' => $article->user])
        {{ $article->created_at }}
      </p>

      <p class="content-preview">{{ $article->content }}</p>

      @if($article->pictures->count() > 1)
      <div class="ui tiny images">
        @foreach($article->pictures as $picture)
        @if(!$loop->first)
        <img class="ui image" src="{{ URL::action('FileController@get_image',['id'=>$picture->id]) }}">
        @endif
        @endforeach
      </div>
      @endif
      @if( $article->comments()->count())
      <div class="ui comments">
        @include('article.cells.feed', ['comment' => $article->comments()->latest()->first()])
      </div>
      @endif
    </div>

    <div class="extra">
      <a class="ui right floated" href="{{ URL::action('ArticleController@show', ['id' => $article->id]) }}">
        查看详情
        <i class="right chevron icon"></i>
      </a>
      <span class="ui yellow label">讨论</span>
      <div class="ui label">Tag</div>
    </div>
  </div>
</div>
