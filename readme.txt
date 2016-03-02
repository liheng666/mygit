此为个人git仓库及git学习笔记
git add 添加文件到暂存区；
git commit -m "更改说明" 提交文件更改；
git status 查看当前文件状态；
git diff 详细查看文件修改的内容；
版本退回 git reset --hard 版本号commit_id；
HEAD指向的是当前版本，HEAD^指向当前版本的上一个版本，以此类推；
版本历史 git log 或 git log --pretty=oneline；
操作历史 git reflog;
git checkout -- 文件名 放弃工作区的修改使文件返回最近的add或commit的状态；
git reset HEAD 文件名  使已经add添加入缓存区的文件修改撤销掉，重新放回工作区；

git rm 文件名  删除文件

$ ssh-keygen -t rsa -C "youremail@example.com" 生成shh密钥

git remote rm origin  解除远程绑定；

git push -u origin master  推送到远程仓库；

查看分支：git branch

创建分支：git branch <name>

切换分支：git checkout <name>

创建+切换分支：git checkout -b <name>

合并某分支到当前分支：git merge <name>

使用普通方式合并 git merge --no-ff -m "说明"

删除分支：git branch -d <name>

储存当前工作区  git stash 

恢复工作区 git stash apply

删除储存 git stash drop 

恢复工作区并删除储存  git stash pop

查看储存区列表 git stash list 

恢复指定储存 git stash apply stash@{0}
