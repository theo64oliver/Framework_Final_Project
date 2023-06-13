<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GYM INSHAPE</title>
        <link rel="icon" type="image/x-icon" href="/images/altere.png">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles 
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>-->
        
        

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
		.header {
		  padding: 10px 16px;
		  position: sticky;
		  top: 0;
		  background: #000;
		  color: #ffffff;
		}
		
		.title_header
		{
		   color: #ffffff;
		    -webkit-animation: glow 1s ease-in-out infinite alternate;
  		    -moz-animation: glow 1s ease-in-out infinite alternate;
 		   animation: glow 1s ease-in-out infinite alternate;
		}
		
		.image {
		  position: absolute;
		  right:150px;
		  top:100px;
		}
		
		.quote {
		   color: #000000;
		   display: inline-block;
    		   margin-left: 75px;
		}
		
		.by {
    		    display: inline-block;
    		    margin-left: 300px;
    		    font-style: italic;
		}
	

		.content {
		  padding: 16px;
		}

		.sticky {
		  position: fixed;
		  top: 0;
		  width: 100%;
		}
		
		.Price_Tab {
		  display: flex;
		  justify-content: center;
		  top:125%;
		}
		
		table,
		td {
   		 border: 1px solid #333;
   		 width:1000px;
   		 text-align : center;
   		 vertical-align:top;
		}

		thead,
		tfoot {
    		 background-color: #333;
   		 color: #fff;
		}
		
		.tab1_title {
		    text-decoration: underline;
		}
		.button {
  		 background-color: #FFC0CB; /* Green */
  		 border: none;
		 color: white;
		 padding: 16px 32px;
		 text-align: center;
		 text-decoration: none;
		 display: inline-block;
		 font-size: 16px;
		 margin: 4px 2px;
		 transition-duration: 0.4s;
		 cursor: pointer;
}
	 	.button_sub {
		  background-color: white; 
		  color: black; 
		  border: 2px solid #FFC0CB;
		}

		.button_sub:hover {
		  background-color: #FFC0CB;
		  color: white;
		}
		
		@-webkit-keyframes glow {
  		from {
   		 text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
 		 }
 		 to {
   		 text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
	  	 }
		}

        </style>
        
        
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            
            
            <div class="header" id="myHeader">
  	    	<h1 class="title_header">GYM INSHAPE</h1>
  	    	@if (Route::has('login'))
                <div class="login_register" style="position: absolute;right:20px;top:30px">
                    @auth
                        <button href="{{ url('/home') }}" class="home_button">Home</button>
                    @else
                        <form action="{{ route('login') }}">
         		    <button type="submit">Log in</button>
      			</form>

                        @if (Route::has('register'))
                            <form action="{{ route('register') }}">
         		    	<button type="submit">Register</button>
      			    </form>

                        @endif
                    @endauth
                </div>
            @endif
	    </div>
	    
	    <div class="quote" id="myQuote">
	    <br>
            	<br>
            	<br>
            	<br>
            	<br>
            	<br>
            	<br>
            	<br>
  	    	<h2>"Work hard in silence and let success become Huge and Dry." <br></h2>
  	    	<pre class="by">By Damnnn</pre>
	    </div>
            
            <div class="image" id="myImage">
            	<img src="/images/thumbnail_Subject.png" alt='Cover Image'/>
            </div>
			<br>
            	<br>
            	<br>
            	<br>
            	<br>
            	<br>
            	<br>
				<br>
            	<br>
            	<br>
            	<br>
            	<br>
            	<br>
            	<br>
				<br>
            	<br>
            	<br>
            	<br>
            	<br>
            	<br>
            	<br>
				<br>
            	<br>
            	<br>
				<br>
            	<br>
            	<br>
            	<br>
            <div class="Price_Tab">
            	<table>
    		    <thead>
        		<tr>
         	  	    <th colspan="3">Subscriptions</th>
       	 	</tr>
   		    </thead>
   		    <tbody>
     	 	  	<tr>
          	  	    <td>
          	  	        <div class="tab1_title">
          	  	            <h3>BASIC</h3>
          	  	        </div>
          	  	        <div class="tab1_description">
          	  	            -------------------------------------------
          	  	            <br>
          	  	            <h4>Included :</h4> 
          	  	            - Access to all collective classes
          	  	            <br>
          	  	            - Gym Towel
          	  	            <br>
          	  	            - Gym Tumbler
          	  	            <br>
          	  	        </div>
          	  	        <div class="tab1_price">
          	  	            <h1>20$/month</h1>
				    <button class="button button_sub">SUBSCRIBE</button>
				    <br>
          	  	        </div>
          	  	    </td>
          	  	    
           	 	    <td>
           	 	        <div class="tab1_title">
          	  	            <h3>PREMIUM</h3>
          	  	        </div>
          	  	        <div class="tab2_description">
          	  	            -------------------------------------------
          	  	            <br>
          	  	            <h4>Included :</h4>
          	  	            - Access to all collective classes
          	  	            <br>
          	  	            - Access to all the equipments of the gym
          	  	            <br>
          	  	            - Gym Towel
          	  	            <br>
          	  	            - Gym Tumbler
          	  	            <br>
          	  	            - 15% Discount on our food supplements store
          	  	            <br>
          	  	            - Decreasing price each year
          	  	            <br>
          	  	        </div>
          	  	        <div class="tab2_price">
          	  	            <h1>30$/month</h1>
          	  	            <button class="button button_sub">SUBSCRIBE</button>
          	  	            <br>
          	  	        </div>
           	 	    </td>
           	 	    
           	 	    <td>
           	 	        <div class="tab1_title">
          	  	            <h3>VIP</h3>
          	  	        </div>
          	  	        <div class="tab3_description">
          	  	            -------------------------------------------
          	  	            <br>
          	  	            <h4>Included :</h4>
          	  	            - Access to all collective classes
          	  	            <br>
          	  	            - Access to all the equipments of the gym
          	  	            <br>
          	  	            - 10 private classes/month
          	  	            <br>
          	  	            - Gym Towel
          	  	            <br>
          	  	            - Gym Tumbler
          	  	            <br>
          	  	            - 30% Discount on our food supplements store
          	  	            <br>
          	  	            - Decreasing price each year
          	  	            <br>
          	  	        </div>
          	  	        <div class="tab3_price">
          	  	            <h1>50$/month</h1>
          	  	            <button class="button button_sub">SUBSCRIBE</button>
          	  	            <br>
          	  	            <br>
          	  	        </div>
           	 	    </td>
       	 	</tr>
   		    </tbody>
		</table>
		<br>
		<br>
            </div>
        </div>
    </body>
</html>
