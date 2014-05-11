<h1>Problem</h1>
<p>Little Bob loves chocolates, and goes to the store with £<code>N</code> money in his pocket. The price of each chocolate is £<code>C</code>. The store offers a discount: for every <code>M</code> wrappers he gives the store, he’ll get one chocolate for free. How many chocolates does Bob get to eat?</p>

<h2>Input Format:</h2>
<p>The first line contains the number of test cases <code>T (&lt;=1000)</code>. <code>T</code> lines follow, each of which contains three integers <code>N, C</code> and <code>M</code></p>

<h2>Output Format:</h2>
<p>Print the total number of chocolates Bob eats.</p>

<h2>Constraints:</h2>
<code>2 <= N <= 100000</code><br>
<code>1 <= C <= N</code><br>
<code>2 <= M <= N</code>

<h3>Sample input</h3>
<code>3</code><br>
<code>10 2 5</code><br>
<code>12 4 4</code><br>
<code>6 2 2</code>

<h3>Sample Output</h3>
<code>6</code><br>
<code>3</code><br>
<code>5</code>

<h2>Explanation</h2>
<p>In the first case, he can buy 5 chocolates with £<code>10</code> and exchange the 5 wrappers to get one more chocolate thus making the total number of chocolates he can eat as 6</p>

<p>In the second case, he can buy 3 chocolates for £<code>12</code>. However, it takes 4 wrappers to get one more chocolate. Hence the offer is unavailable and the total number of chocolates remains 3.</p>

<p>In the third case, he can buy 3 chocolates for £<code>6</code>. Now he can give 2 of this 3 wrappers and get 1 chocolate. Again, he can use his 1 unused wrapper and 1 wrapper of new chocolate to get one more chocolate. Total is 5.</p>
