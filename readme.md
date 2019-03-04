## Inspiration
The idea for the SCU Jukebox came from our frustration with the music being played in Benson Dining Hall. We were tired of hearing the same five Ariana Grande songs on repeat every morning, so we thought a jukebox would be a great solution! With a jukebox we could control the music being played in Benson and in theory any linked public location. Then we realized a jukebox would be perfect for promoting local artists at SCU, too, because we could use it as a platform to get their music out to the community. 

## What it does
Our website allows smaller creators to create an account, login, post their content, and promote themselves on a platform that reaches their fellow SCU students. It also allows students to choose what they want to hear, where they want to hear it.

## How we built it
We used WordPress to build the structure of our website. Our website is being hosted on Digital Ocean, the cloud based hosting service made for developers. We also created our own HTML, CSS, PHP, and JavaScript code to produce a custom music player, an interactive map, and a user-login system.

## Challenges we ran into
The original plan was to make a jukebox with a live radio system where we could use any device to queue a song from a curated repository of music produced by SCU artists and our other favorite content creators. The live radio feature would allow users to upvote the songs in the queue that they want to hear and downvote the songs that they don't. What we didn't realize is that the wordpress API doesn't have any live radio features. It only allows us to create a local radio player instead of a shared live one. In the future we hope to create another server with a live radio player using Ice-cast and VLC. 

Another issue that we faced was linking our website to github. Because we created our website with an SSH key that was lost, we were not able to connect remotely and copy the files using pscp. We figured out that we could use the console provided by Digital Ocean to create a git repository on the server itself.

## Accomplishments that we're proud of
Our project is an exemplar of our individual achievements and presents a hallmark of our individual abilities. Perhaps one of the common achievements between each member was our quick thinking and ability to learn html css and implementation of the code in wordpress.

## What we learned
We learned so much over these 24 hours. We learned HTML, CSS, JavaScript, frontend and backend programing, the difficulties of working within preestablished templates, ftp, github, hosting services, and just about everything. Most of us had very limited experiences outside of the classroom , so it was the first time for many of us to confront these issues let alone solve them.  It was a great learning experience.

## What's next for Santa Clara Jukebox
In the future, we would aim to improve our website by implementing an efficient method for getting user input for .mp3 files, so that they can automatically be added to a queue, more similar to a real jukebox. Additionally, we would implement a way for clips to play sequentially automatically.
