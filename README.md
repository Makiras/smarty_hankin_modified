# Smarty Hankin theme, created by hankin

## 介绍 (Follows are [origin repo](https://gitee.com/theme-smarty/smarty_hankin))

> 一款开源wordpress主题 smarty_hankin主题

- pjax无刷新体验
- 12种配色，5种布局，支持暗黑模式
- 侧边栏小工具，音乐播放器，内置Mac界面代码高亮行号显示，
- 强大的后台设置
- 丰富的自定义页面
- 还有更多...

主题预览 [www.hankin.cn](https://www.hankin.cn)

Modified under Apache License 2.0

## What have I done or planning to do

- [x] Remove old Editor.md, use the origin wp plugin. Modified the PJAX for `Katex`,`Mind`,`meraid` complicated.  
- [x] Reconstruct comment system, use gravatar and email addr. NOT FUCKING TENCENT QQ.  
- [x] Add cdn(`jsdelivr`) for some of the js/css.  
- [x] Rebuild highlighter, using Enlighter plugin for highligter. Please notice that this function also need to modify `Editor.md` plugin. The code which is using to handle codeblocks and Katex inline should be replce.  
- [x] Fix white background for info card when transparent is enabled.  
- [x] Fix Widget_recent_comments (NOT THE THEME'S WIDGET) word overflow and changing line bug.  
- [x] Replace article default random images url to gitee.io (improve access speed).  
- [ ] Fix PJAX for WP-ADMIN on top-tool-bar.
- [ ] Refact notice board, change to use `https://hitokoto.cn/` API
- [ ] Fix Android Edge, Firefox blur ,`backdrop-filte`.  

## What's more

1. I have not learn any JS/CSS/PHP knowledge, so I cannot prove it won't cause damage to your website.  
2. Here is my website plugin.  

    ```txt
    Modified:
        WP Editor.md
    Not modified but relative:
        Enlighter
    Maybe relative:
        Akismet Anti-Spam
        Wordfence Security
    Jesse it must not be relative
        Google XML Sitemaps
        Mailgun
        WP Super Cache
        WP-Optimize - Clean, Compress, Cache
        WP2Static
    ```

3. I'll maintain this theme but I will not make PR/MR because THE CODE is refact destructively. It will be hard to merge back.  
4. Do not use the theme's editor, PLZ.

