# Challenge 1: Git

### Description
This challenge is all about the basics of Git and how it is used to in teams or even solo to version control your code and assets for projects.

By the end of this you should have a basic understanding of what it means to version control a project and how to use Git to achieve this.

### Sources/Prerequisites 

1. [Git SCM](https://git-scm.com/)
   1. [Windows](https://git-scm.com/) 
   2. [Mac if installing through homebrew](https://git-scm.com/download/mac)
2. Terminal of some kind 
   1. Windows Users: You can make use of the git bash terminal that is installed for you.
   2. Mac Users: You can use the builtin terminal on MacOS
3. An account on Github
   1. Please register [here](https://github.com/signup)
   2. Make sure you are signed in

### The challenge
>Note for this Challenge you are not required to produce any code and directory names can be whatever you like.

Now the challenge will be to create a repository on Github under your own account (this must be a public repo for now). Then clone this repository to this challenge folder. If you are having trouble figuring this follow the guide [here](https://docs.github.com/en/get-started/quickstart/create-a-repo).

Once cloned please cd into the directory and run the following command:
`git status` and note the output within your terminal. This will indicate that the git project has no changes made yet.

Let's make a change and see how git responds. Using your file explorer navigate to this challenge folder. Once there make a new file and call it `Changes.txt` and be sure not to put any text within it.

Now let's run that `git status` command in the terminal again and see what has changed.

You should see that there are untracked files that Git has picked up. Now we need to tell git to track these files and then "Commit" these changes to the project.

To get Git to track these files we run the `git add .` command in the terminal. Now normally you do not get any output from this command, but you can check if Git has added the file by running the `git status` command again.

You should see output similar to before but now with Green!

Now that Git has tracked the file we can "Commit" our work by using this command `git commit -m "XXXX"`, replace `XXXX` with your own message.
Once that is done you should see some output like below!

Now that we have commit some work we want to put this to our repository, now because we have never put anything into this repo before we need to tell git to create a branch on our repository. To do this we need to run this command " git push --set-upstream origin master", this command lets git know we want to push our work to our repo on Github and that we want to set the branch on the repository to the name 'master'.
From now on we will not need to tell git this anymore and can simply use `git push` because it remembers the branch we are pushing too!

Once you have completed this you have now done the basics to publish your work, Congrats! 🎉 But now we will learn why people really use Git.

What we need to do now is to open the `Changes.txt` we created early but this time let's add some text to the file and save!

Now what happens when we do our `git status` command in the terminal again?

Notice how now Git says the file was modified, this means that git is tracking the changes we made to the file. We can even see the changes if we run the `git diff` command (note to leave this view press "q" on your keyboard), and you'll see output like this!


This means Git can see what files we have changed and even the exact lines of text we have added to the files we made. 
Now let us commit this work too like we did before and push this back to Github. 

Once you have done this you now know the very basic functionality of Git and it's version control mechanism and for now this is all you will need!

#### Challenge Completed! 🎖

### Completion Checklist

- [ ] Create Github Account
- [ ] Create new repository on Github
- [ ] Understand how Git works on a basic level
- [ ] Publish your first bit of work to Github
- [ ] Complete the Challenge!

## Extras!

Now that you know the basics of git on the command line you may be pleased to know there is a friendlier way to achieve much of the same functionality. You can this using a programme called [Github Desktop](https://desktop.github.com/)