<?php
if (post_password_required())
    return;
?>
<?php if (comments_open()) : ?>
    <div id="comments" class="comments">
        <div class="card">
            <div class="mx-4 my-3">
                <i class="text-xl text-primary iconfont icon-message--line mr-2"></i>评论
                <small class="font-theme text-muted">(<?php echo number_format_i18n(get_comments_number()); ?>)</small></div>

            <div class="card-body">
                <p id="reply-title" class="comments-title"><?php if (isset($_GET['replytocom'])) : ?>回复给 <font color="#4680ff"><?= get_comment_author($_GET['replytocom']) ?></font><?php endif; ?>
                <small>
                    <?php cancel_comment_reply_link(); ?>
                </small>
                </p>
                <div id="respond" class="comment-respond mb-4">
                    <form action="<?php echo home_url(add_query_arg(array()));  ?>#respond" id="commentform" class="comment-form" method="post">
                        <div class="comment-from-author">
                            <div class="comment-avatar-author d-flex flex-fill align-items-center text-sm mb-2">
                                <div class="avatar w-32">
                                    <?php if (isset($_COOKIE['comment_author'])) : ?>
                                        <img src="<?php $auth_avatar_url = get_avatar_url($_COOKIE['comment_author_email']);
                                                    echo $auth_avatar_url ? "https://www.gravatar.com/avatar/" . hash('md5', $_COOKIE['comment_author']) . "?s=48&d=identicon" : $auth_avatar_url ?>" class="avatar w-32" id="avatar_img" style="border-radius: 5px;">
                                    <?php else : ?>
                                        <img src="<?= "https://www.gravatar.com/avatar/" . hash('md5', time()) . "?s=32&d=identicon" ?>" class="avatar w-32" id="avatar_img" style="border-radius: 5px;">
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="comment-form-text">
                                <?php if (isset($_COOKIE['comment_author'])) : ?>
                                    <p class="warning-text" style="margin-bottom:10px">欢迎您 <a href="javascript:void(0)" no-pjax id="clear-qq">
                                            <font color="#4680ff"><?= $_COOKIE['comment_author']; ?></font> &nbsp;<i class="feather icon-edit"></i>
                                        </a></p>
                                    <div class="comment-form-info row row-sm" id="avatarShow" style="<?php if ($_COOKIE['comment_author']) : ?>display:none<?php endif; ?>">
                                        <div class="col-12 col-md-4">
                                            <div class="form-group comment-form-author">
                                                <input class="form-control text-sm" id="author" placeholder="您的昵称" name="author" type="text" value="<?= $_COOKIE['comment_author']; ?>" required="required">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group comment-form-email">
                                                <input id="email" class="form-control text-sm" name="email" placeholder="您的邮箱" type="email" value="<?= $_COOKIE['comment_author_email']; ?>" required="required"></div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group comment-form-url">
                                                <input class="form-control text-sm" placeholder="网址(可不填)" id="url" name="url" type="url" value="<?= $_COOKIE['comment_author_url']; ?>"></div>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <p class="warning-text" style="margin-bottom:10px">欢迎您 <a href="javascript:void(0)" no-pjax id="clear-qq">
                                            <font color="#4680ff">游客</font> &nbsp;<i class="feather icon-edit"></i>
                                        </a></p>
                                    <div class="comment-form-info row row-sm" id="avatarShow">
                                        <div class="col-12 col-md-4">
                                            <div class="form-group comment-form-author">
                                                <input class="form-control text-sm" id="author" placeholder="请输入您的昵称" name="author" type="text" value="" required="required">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group comment-form-email">
                                                <input id="email" class="form-control text-sm" name="email" placeholder="请输入您的邮箱" type="email" value="" required="required">
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-4">
                                            <div class="form-group comment-form-url">
                                                <input class="form-control text-sm" placeholder="网址(可不填)" id="url" name="url" type="url" value="">
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <div class="loader-comment" style="display: none;" id="comment-loader">
                                    <div class="loader-track">
                                        <div class="loader-fill"></div>
                                    </div>
                                </div>
                                <div class="comment-textarea mb-3">
                                    <textarea id="comment" name="comment" class="form-control form-control-sm" rows="1"></textarea>
                                </div>
                                <div class="d-flex flex-fill align-items-center">
                                    <div class="flex-fill"></div>
                                    <div class="form-submit">
                                        <button type="submit" id="submit" class="btn btn-dark">发布评论</button>
                                        <?php comment_id_fields(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <ul class="comment-list">
                    <?php
                    wp_list_comments([
                        'style' => 'ol',
                        'short_ping' => TRUE,
                        'avatar_size' => 40,
                        'type' => 'comment',
                        'callback' => 'simple_comment',
                    ]);
                    ?>
                </ul>
                <nav class="navigation comment-navigation u-textAlignCenter" data-fuck="<?php the_ID(); ?>">
                    <?php paginate_comments_links('prev_next=0'); ?>
                </nav>
            </div>
        </div>
    </div>
<?php endif ?>