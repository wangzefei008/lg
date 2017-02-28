
    <div id="container">
                    <div class="sidebar">
                                <a class="btn_create" href="create.html">发布新职位</a>
                                 <dl class="company_center_aside">
        <dt>我的信息</dt>
        <dd>
        <a href="{{ URL::to('company_mymessage') }}">我的信息</a> 
            </dd>
    <dd @if($status == 6) class="current" @endif>
        <a href="{{ URL::to('company_my_message') }}">完善/修改信息</a>
    </dd>
</dl>
                                <dl class="company_center_aside">
        <dt>我收到的简历</dt>
        <dd @if($status == 1) class="current" @endif>
        <a href="{{ URL::to('labelresume') }}">待处理简历</a> 
        @if($status == 1)
        <span>{{ $count }}</span>
        @endif
            </dd>
    <dd @if($status == 2) class="current" @endif>
        <a href="{{ URL::to('notice') }}">已通知面试简历</a>
        @if($status == 2)
        <span>{{ $count }}</span>
        @endif
    </dd>
    <dd @if($status == 3) class="current" @endif>
        <a href="{{ URL::to('unnotice') }}">不合适简历</a>
        @if($status == 3)
        <span>{{ $count }}</span>
        @endif
    </dd>
</dl>
<dl class="company_center_aside">
        <dt>我发布的职位</dt>
            <dd @if($status == 4) class="current" @endif>
        <a href="{{ URL::to('effective') }}">有效职位</a>
        @if($status == 4)
        <span>{{ $count }}</span>
        @endif
    </dd>
    <dd @if($status == 5) class="current" @endif>
        <a href="{{ URL::to('online') }}">已下线职位</a>
        @if($status == 5)
        <span>{{ $count }}</span>
        @endif
    </dd>
    </dl>
            </div>