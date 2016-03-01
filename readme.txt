此为个人git仓库；
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

