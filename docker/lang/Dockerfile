FROM centos:centos7

LABEL desc="keycloak-sandbox lang"

RUN yum install -y epel-release                                                && \
    yum install -y http://rpms.famillecollet.com/enterprise/remi-release-7.rpm && \
    yum update -y                                                              && \
    yum install -y --enablerepo=remi-php80 php php-{mbstring,dom}

