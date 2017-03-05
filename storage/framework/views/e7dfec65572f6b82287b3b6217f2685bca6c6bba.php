<div class="sidebar">
    <a class="btn_create" href="<?php echo e(URL::to('person')); ?>">个人中心</a>
    <dl class="company_center_aside">
        <dt>简历管理</dt>
        <dd>
            <a href="<?php echo e(URL::to('create_resume')); ?>">创建简历</a>
        </dd>
        <dd>
            <a href="<?php echo e(URL::to('my_resume')); ?>">我的简历</a>
        </dd>
    </dl>
    <dl class="company_center_aside">
        <dt>求职管理</dt>
        <dd>
            <a href="<?php echo e(URL::to('company_interview')); ?>">面试邀请</a>
        </dd>
        <dd>
            <a href="<?php echo e(URL::to('jobs_apply')); ?>">已申请职位</a>
        </dd>
        <dd>
            <a href="<?php echo e(URL::to('personal_favorites')); ?>">职位收藏夹</a>
        </dd>
    </dl>
    <dl class="company_center_aside">
        <dt>账号管理</dt>
        <dd>
            <a href="<?php echo e(URL::to('person')); ?>">基本资料</a>
        </dd>
        <dd>
            <a href="<?php echo e(URL::to('pms_sys')); ?>">我的消息</a>
        </dd>
    </dl>
</div>