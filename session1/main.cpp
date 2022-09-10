#include <iostream>

using namespace std;

int main()
{

   float a, b, result;
    char op;
    cout<<"CALCULATER\n\n";

    cout <<"Enter the first number\n";cin >>a;
    cout<<"Enter the second number\n";cin>>b;
    cout<<"Enter operation (+,-,*,/) :\n";cin>>op;


    if(op== '+' )
        {
        result=a+b;
        cout<<"THE RESULT = " << result;
        }


    else if(op== '-' )
        {
        result=a-b;
        cout<<"THE RESULT = " << result;
        }

    else if(op== '*' )
        {
        result=a*b;
        cout<<"THE RESULT = " << result;

        }


    else if(op== '/' )
        {
        result=a/b;
        cout<<"THE RESULT = " << result;
        }
     else
     {
        cout<<"EROR";
     }

    return 0;
}
