#include <stdio.h>

long result;

void main(){
char a[8];
int i,bz=1;
printf("Plase input your key word:");
scanf("%s",a);
for (i=0;i<8;i++)
if(i%4==0)
if(i/4==0)
if( a[i]+256*a[i+1]+65536*a[i+2]+16777216*a[i+3]!=1937073251)bz=0;
else;
else if(i/4==1)
if( a[i]+256*a[i+1]+65536*a[i+2]+16777216*a[i+3]!=1701995365)bz=0;

if(bz==1)printf("flag{%s_1}",a);
else printf("wrong key");
system("pause");
}


