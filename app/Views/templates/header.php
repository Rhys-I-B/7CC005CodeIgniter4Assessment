<!doctype html>
<html>
<head>
    <title>CodeIgniter Tutorial</title>
	
	<style>
		ul {
		  list-style-type: none;
		  margin: 0;
		  padding: 0;
		  overflow: hidden;
		  background-color: #D4D4D4;
		}

		li {
		  float: left;
		}

		li a {
		  display: block;
		  color: #FF6700;
		  text-align: center;
		  font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
		  padding: 14px 16px;
		  text-decoration: none;
		}

		li a:hover {
		  background-color: #ECECEC;
		}
	</style>
</head>

<body>

	<ul>
	  <li><a href="<?=base_url()?>"><b>CodeIgniter</b></a></li>
	  <li><a href="<?=base_url()?>home">Home</a></li>
	  <li><a href="<?=base_url()?>about">About</a></li>
	  <li><a href="<?=base_url()?>news">News</a></li>
	  <li><a href="<?=base_url()?>news/new">Create News</a></li>
	  <li><a href="<?=base_url()?>games">Games</a></li>
	  <li><a href="<?=base_url()?>games/new">Create Games</a></li>
	  <li><a href="<?=base_url()?>react">React JS Project</a></li>
	</ul>

</body>
</html>


