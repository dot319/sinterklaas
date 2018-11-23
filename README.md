<h1>Sinterklaas wishlists</h1>
<p>A website that enables children to create and share wishlists for Sinterklaas.<br />
Visit the website <a href="https://murmuring-woodland-16654.herokuapp.com/">here</a>.<br />
See the Trello board <a href="https://trello.com/b/jt0bSx8M/sinterklaas">here</a>.<br />
Visit my <a href="http://www.doriekeberends.nl">Portfolio</a>.</p>

<h2>Requirements:</h2>
- [v] Made in Laravel <br />
- [v] Have at least 2 models and at least 1 relationship<br />
- [&nbsp;&nbsp;] Have at least 3 interactive pages + 1 about page<br />
- [v] Use at least 1 AJAX component<br />
- [&nbsp;&nbsp;] Use part Bootstrap, part own styling<br />
- [v] Website is deployed <br />
- [v] Code is on github<br />
- [&nbsp;&nbsp;] Prioritize functionality, bonus points for design and creativity<br />
- [&nbsp;&nbsp;] Deadline: Friday November 23st, midday<br />

<h2>Progress:</h2>

<h3>Friday November 23rd, 2018<br />
- User can now edit wishlist letter<br />
- Sharing link now points to $_REQUEST['SERVER_NAME]/wishlists/{wishlist}
- Wishlists are now publicly visible through /wishlists/{wishlist}

<h3>Thursday November 22nd, 2018</h3>
- Made layout and filled out wishlists/edit.blade.php, pull content from wishlist table<br />
- In wishlists/edit.blade.php user can add wishes to wishlist through AJAX request<br />
- User can now delete wishes from his wishlists<br />
- User can now edit wishlist name<br />

<h3>Wednesday November 21st, 2018</h3>
- Created Vanilla Laravel Project<br />
- Created Trello board (<a href="https://trello.com/b/jt0bSx8M/sinterklaas">View</a>)<br />
- Created Github Repository <br />
- Deployed through Heroku (<a href="https://murmuring-woodland-16654.herokuapp.com/">Here</a>)<br />
- Created README.md<br />
- Implemented Laravel's native registration and login system<br />
- Put the navbar in its own file<br />
- Created wishlist model and a button for making a new one that then returns the edit page for the newly created wishlist<br />