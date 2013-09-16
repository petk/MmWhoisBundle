<?php
namespace Mm\WhoisBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * Class: Whois
 *
 * @see AbstractType
 */
class Whois extends AbstractType
{
    /**
     * buildForm
     *
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('task');
        $builder->add('dueDate', null, array('widget' => 'single_text'));
    }

    /**
     * getName
     *
     */
    public function getName()
    {
        return 'task';
    }
}
