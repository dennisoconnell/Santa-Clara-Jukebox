## Devpost and note on understanding the files
https://devpost.com/software/santa-clara-jukebox
Nearly all changes made by us can be found in the wp-content folder.

## Inspiration
The idea for the SCU Jukebox came from our frustration with the music being played in Benson Dining Hall. We were tired of hearing the same five Ariana Grande songs on repeat every morning, so we thought a jukebox would be a great solution! With a jukebox we could control the music being played in Benson and in theory any associated public location on SCU campus. Then we realized a jukebox would be perfect for promoting local artists at SCU, too, because we could use it as a platform to get their music out to the community. 

## What it does
Our website allows smaller creators to create an account, login, post their content, and promote themselves on a platform that reaches their fellow SCU students. It also allows students to choose what they want to hear, where they want to hear it.

## How we built it
We used WordPress to build the structure of our website. Our website is being hosted on Digital Ocean, the cloud based hosting service made for developers. We also created our own HTML, CSS, PHP, and JavaScript code to produce a custom music player, an interactive map, and a user-login system.

## Challenges we ran into
The original plan was to make a jukebox with a live radio system where we could use any device to queue a song from a curated repository of music produced by SCU artists and our other favorite content creators. The live radio feature would allow users to upvote the songs in the queue that they want to hear and downvote the songs that they don't. What we didn't realize is that the wordpress API doesn't have any live radio features. It only allows us to create a local radio player instead of a shared live one. In the future we hope to create another server with a live radio player using Ice-cast and VLC. 

Another issue that we faced was linking our website to github. Because we created our website with an SSH key that was lost, we were not able to connect remotely and copy the files using pscp. We figured out that we could use the console provided by Digital Ocean to create a git repository on the server itself.

## Accomplishments that we're proud of
At the start of the hackathon we were a group of students who had dabbled here and there, learning the basics of development while never producing a final product. Now we have a fully functional website with features that we created ourselves like a custom music player, an interactive map, and a user-login system.

## What we learned
We learned so much over these 24 hours. We learned HTML, CSS, JavaScript, frontend and backend programing, the difficulties of working within preestablished templates, ftp, github, hosting services, and just about everything. We still have so much to learn and are looking forward to working on more awesome and fun projects like the Santa Clara Jukebox.

## What's next for Santa Clara Jukebox
In the future, we would aim to improve our website by implementing an efficient method for getting user input for .mp3 files, so that they can automatically be added to a queue, more similar to a real jukebox. We would also wish to implement a way for clips to play sequentially automatically. Finally, we would like to add the aforementioned live radio feature using Ice-Cast.
