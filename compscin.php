<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <style type="text/css">
    body{
                font-size: 15px;
                font-family: Montserrat, Helvetica Neue, sans-serif;
                margin-top: 30px;
                margin-left: 30px;
                width: 100%;
                color: white;
                background-color: #7f8c8d;
            }
            .lightblue{
                color: #7f8c8d;
                font-size: 20px;
            }
            .underline{
                text-decoration: underline;
            }
            h2{
                text-align: center;
                font-style: italic;
            }
            #code, pre{
	            margin: 50px auto;
            }
    </style>

    <title></title>
</head>

<body>
    <h2>Grab a CS Engineer</h2>

    <h3>This is a very Complex C++ Program:</h3>

    <div id="code">
        <pre>
#include <iostream>
#include <ctype>
#include <dos>
#define GET_VAL( val, type ) \
    {                                                   \
        ASSERT( ( pIP + sizeof(type) ) &lt;= pMethodEnd ); \
        val = ( *((type *&)(pIP))++ );                  \
    }
    int main() {
    Run( std::string(), 10, 1 );
    getchar();
}
//String mode cannot be initialised so soon
void Run( const std::string& v, int tgt, int start ) {
    for( ; tgt &gt;= 2 * start + 1; ++start )
        Run( v + ' ' + boost::lexical_cast( start ), tgt - start, start + 1 );
    std::cout &lt;&lt; v &lt;&lt; ' ' &lt;&lt; tgt &lt;&lt; std::endl;
}
//Wondering What code this is
int main () {
  int line = 1; // set the line (y coordinate) to 1 (first line)
  int p = 0; // set the position in the line (x coordinate) to 0.
  DIR dcur = EAST; // set the current direction to EAST... DIR is a int typedef
  //Prove your might as CS Engineer
  //Follow just the C++ Comments
  //Dont worry, you wont find the answer easily 
  /* ======== PROGRAM VARS ======== */
    stack  svar; // the program stack
  /* ============================== */
  // Technically undefined behavior as variable may only
    if(isblank(getVarStr(file)[0]) || isnull(getVarStr(file)[0])) // if line[0] is empty or '\0'
      err("No initial insructions: Execution failed"); // throw error... err(const char*)
    bool string_mode = false; // not in string mode...
    while(true) { // program loop
      randSeed(); // invokes random seed: srand(time(NULL));
         char curp = seek(line, p); // char current cursor position
         if(!string_mode)
             setdir(&dcur, line, p); // set the direction based on curp... ^^^
           if(istrampoline(curp)) // if # symbol (means skip next call):
             jumpp(dcur, &line, &p); // *p+=2;
           else // if 'curp' is normal (not '#')
             nextp(dcur, &line, &p); //  ++*p
         trypush(seek(line, p), &svar); // if 'curp' is number 0-9: svar.push(curp-'0');
    /* ========================= parse 'curp' =============== */
   /* ... */
    float InvSqrt (float x){
    float xhalf = 0.5f*x;
    int i = *(int*)&x;
    i = 0x5f3759df - (i&gt;&gt;1);
    x = *(float*)&i;
    x = x*(1.5f - xhalf*x*x);
    return x;
}
//Answer is somewhere down the line
strcpy(to, from, count)
char *to, *from;
int count;
{
    int n = (count + 7) / 8;
    switch (count % 8) {
    case 0: do { *to = *from++;
    case 7:      *to = *from++;
    case 6:      *to = *from++;
    case 5:      *to = *from++;
    case 4:      *to = *from++;
    case 3:      *to = *from++;
    case 2:      *to = *from++;
    case 1:      *to = *from++;
               } while (--n &gt; 0);
    }
}
//Comment Reading can be so much frustrating
assert((o-----o
        |     !
        !     !
        !     !
        !     !
        o-----o ).area == ( o---------o
                            |         !
                            !         !
                            o---------o ).area );
                            // a^=b^=a^=b;     // int a and int b will be swapped
 
// be assigned once within the same statement.
// 
// But this can be written correctly like this.
// Which still looks cool and unreadable ;-)

a^=b;
b^=a;
a^=b;
unsigned int reverse(register unsigned int x)
{
 x = (((x & 0xaaaaaaaa) &gt;&gt; 1) | ((x & 0x55555555) &lt;&lt; 1));
 x = (((x & 0xcccccccc) &gt;&gt; 2) | ((x & 0x33333333) &lt;&lt; 2));
 x = (((x & 0xf0f0f0f0) &gt;&gt; 4) | ((x & 0x0f0f0f0f) &lt;&lt; 4));
 x = (((x & 0xff00ff00) &gt;&gt; 8) | ((x & 0x00ff00ff) &lt;&lt; 8));
 return((x &gt;&gt; 16) | (x &lt;&lt; 16));
}
//It gets Obfuscated when complex code makes it hard to find the answer
//I know you have kept a lot of patience till now
//Wouldnt you continue ahead to read a few lines more
//I m just trying to write the answer

ihi = y[0]&gt;y[1] ? (inhi=1,0) : (inhi=0,1);
return ((h &lt;&lt; 7) - h + (h &gt;&gt;&gt; 9) + (h &gt;&gt;&gt; 17))
 //Answer: cse_wins_after_a_tiring_effort  
 void sum(Cmplx1 c1,Cmplx1 c2)
{
cout\n\t\tRESULT : ;
cout\n\n\t[c1.real + i c1.imagin;
Cmplx1 op1,op2;
clrscr();
cout &lt; as&lt;\n\n\tADDITION OF TWO COMPLEX NUMBERS USING FRIEND FUNCTIONS\n\n;
cout &lt; assd &lt;\n\tINPUT\n\n\t\tOPERAND 1;
op1.get();
cout &lt; sda &lt;\n\n\t\tOPERAND 2;
op2.get();
sum(op1,op2);
getch();
}   
using namespace std;
class Complex
{
    private:
       int real;
       int imag;
    public:
       Complex(): real(0), imag(0) { }
       void Read()
        {
           cout&lt;&lt;"Enter real and imaginary number respectively:"&lt;&lt;endl;
           cin&gt;&gt;real&gt;&gt;imag;
        }
        Complex Add(Complex comp2)
        {
            Complex temp;
            temp.real=real+comp2.real;
/* Here, real represents the real data of object c1 because this function is called using code c1.Add(c2) */
            temp.imag=imag+comp2.imag;
/* Here, imag represents the imag data of object c1 because this function is called using code c1.Add(c2) */
            return temp;
        }
        void Display()
        {
            cout&lt;&lt;"Sum="&lt;&lt;real&lt;&lt;"+"&lt;&lt;imag&lt;&lt;"i";
        }
};

</pre>
    </div>This is the End of the Page... Answer is hidden<br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
</body>
</html>
<?php include('foot.php'); ?>