
Hello, and thanks for stopping-by! This project is subject to ongoing development. The early code has a few errors & omissions.

(1) The form post to add a new score does not have functional code behind it. I had made a start coding this, but remarked it out in favour of getting a screen that rendered something, as opposed to an error screen! Basically I need to create a new instance of user & score, and populate the attributes with the request data, before calling the save method. It would be good to do this in a transactional way, as a user_id is required in order to enter a FK in the score table. In order to obtain this ID (whose PK field is auto-increment), I can either get the Max(+1) of the existing IDs in the user table, or actually do the save against the user table and return the inserted ID. This can then be used to populate the FK in scores.

(2) The front-end did not utilize the framework properly, and bootstrap was under-utilized. At www.getbootstrap.com/css I have found a form template that would render the HTML in a more professional manner. I was also unaware that Laravel 5.4 ships without the \Illuminate\HTML module. I was wondering where all my front-end Laravel functionality had gone! Details of this component can be obtained at  www.laravelcollective.com. It provides the functionality I was used to working with at my last place. It covers the various input types, and provides an additional parameter (passed as an array), with which to add [bootstrap] classes.  

(3) The functionality surrounding administrator actions requires a knowledge of authentication. I now have a much fuller understanding of authentication, in particular how Middleware can be utilised on routes, or in controller constructors to, to intercept requests and check whether a user is authenticated & authorised to carry-out a particular action.

(4) Sorting & filtering - I am aware of laravel methods for sorting recordsets. A filtered result can be obtained by passing a where clause when requesting the model instance record collection (using Eloquent OR/M which implements Active Record Pattern). The most efficient method of achieving this would be via an AJAX-call, since in this way the entire page will not need to be re-rendered when a filter / sort is applied , and state is maintained within the filter / sort sections. When data is sorted or filtered the records returned need to retain their ranking, as the top score with a ranking ('position') of '1', needs to show this irrespective of sorting & filtering applied. I need to research this a little.

This exercise will provide an opportunity to deepen my knowledge still-further, and so my intention going-forward is to keep it maintained, up until the point that the original brief is fulfilled. In my previous role I was 'standing on the shoulder of giants', in the sense that a lot of things were already in place. However, by building a Laravel app of my own I have a much more fundamental appreciation of how things work!"



"I have not failed, I have found 10,000 ways that will not work" -Edison



