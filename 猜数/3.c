#include <stdio.h>

main(){
	__int64_t a,b,c,d,intotal,q=0;
	srand(10520);
	a = rand()%10520;
	b = rand()%10520;
	c = rand()%10520;
	d = rand()%10520;
	
	intotal=a+b+c+d;
	printf("Input your key:");
	scanf("%ld",&q);
	//printf("q=%ld",q);
	//printf("%ld,%ld",intotal,q);
	
	if(q==intotal)
		printf("flag{cdusec_wsj_%ld}",q);
	else printf("wrong!");
}